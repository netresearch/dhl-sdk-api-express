<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\Shipment\ShipmentDetails;
use Dhl\Express\Webservice\Soap\Type\Common\Billing;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\DangerousGoods;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\DangerousGoods\Content;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;
use Dhl\Express\Webservice\Soap\Type\SoapShipmentRequest;

/**
 * Shipment Request Mapper.
 *
 * Transform the shipment request object into SOAP types suitable for API communication.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentRequestMapper
{
    /**
     * @param ShipmentRequestInterface $request
     *
     * @return SoapShipmentRequest
     * @throws \InvalidArgumentException
     */
    public function map(ShipmentRequestInterface $request)
    {
        $this->checkConsistentUOM($request->getPackages());

        // Since we checked that all packages use the same UOMs, we can just take them from any package
        $weightUOM = $request->getPackages()[0]->getWeightUOM();
        $dimensionsUOM = $request->getPackages()[0]->getDimensionsUOM();

        // Create shipment info
        $shipmentInfo = new ShipmentInfo(
            $this->getDropOfTypeFromShipDetails(
                $request->getShipmentDetails()->isUnscheduledPickup()
            ),
            $request->getShipmentDetails()->getServiceType(),
            $request->getShipmentDetails()->getCurrencyCode(),
            $this->mapUOM($weightUOM, $dimensionsUOM)
        );

        // Create ship
        $ship = new Ship(
            new Ship\ContactInfo(
                new Ship\Contact(
                    $request->getShipper()->getName(),
                    $request->getShipper()->getCompany(),
                    $request->getShipper()->getPhone()
                ),
                new Address(
                    $request->getShipper()->getStreetLines()[0],
                    $request->getShipper()->getCity(),
                    $request->getShipper()->getPostalCode(),
                    $request->getShipper()->getCountryCode()
                )
            ),
            new Ship\ContactInfo(
                new Ship\Contact(
                    $request->getRecipient()->getName(),
                    $request->getRecipient()->getCompany(),
                    $request->getRecipient()->getPhone()
                ),
                new Address(
                    $request->getRecipient()->getStreetLines()[0],
                    $request->getRecipient()->getCity(),
                    $request->getRecipient()->getPostalCode(),
                    $request->getRecipient()->getCountryCode()
                )
            )
        );

        $commodities = new InternationalDetail\Commodities(
            $request->getShipmentDetails()->getDescription()
        );

        $commodities->setNumberOfPieces($request->getShipmentDetails()->getNumberOfPieces());
        $commodities->setCustomsValue($request->getShipmentDetails()->getCustomsValue());

        // Create shipment
        $requestedShipment = new RequestedShipment(
            $shipmentInfo,
            $request->getShipmentDetails()->getReadyAtTimestamp(),
            $request->getShipmentDetails()->getTermsOfTrade(),
            new InternationalDetail(
                $commodities
            ),
            $ship,
            new Packages(
                $this->mapPackages($request->getPackages())
            )
        );

        $shipperStreetLines = $request->getShipper()->getStreetLines();
        if ((count($shipperStreetLines) > 1) && !empty($shipperStreetLines[1])) {
            $requestedShipment->getShip()->getShipper()->getAddress()->setStreetLines2($shipperStreetLines[1]);
        }

        if ((count($shipperStreetLines) > 2) && !empty($shipperStreetLines[2])) {
            $requestedShipment->getShip()->getShipper()->getAddress()->setStreetLines3($shipperStreetLines[2]);
        }

        $shipperEmail = $request->getShipper()->getEmail();
        if (!empty($shipperEmail)) {
            $requestedShipment->getShip()->getShipper()->getContact()->setEmailAddress($shipperEmail);
        }

        $recipientStreetLines = $request->getRecipient()->getStreetLines();
        if ((count($recipientStreetLines) > 1) && !empty($recipientStreetLines[1])) {
            $requestedShipment->getShip()->getRecipient()->getAddress()->setStreetLines2($recipientStreetLines[1]);
        }

        if ((count($recipientStreetLines) > 2) && !empty($recipientStreetLines[2])) {
            $requestedShipment->getShip()->getRecipient()->getAddress()->setStreetLines3($recipientStreetLines[2]);
        }

        $recipientEmail = $request->getRecipient()->getEmail();
        if (!empty($recipientEmail)) {
            $requestedShipment->getShip()->getRecipient()->getContact()->setEmailAddress($recipientEmail);
        }

        $shippingPaymentType = $request->getBillingAccountNumber()
            ? Billing\ShippingPaymentType::R
            : Billing\ShippingPaymentType::S;

        $requestedShipment->getShipmentInfo()->setBilling(
            new Billing(
                $request->getPayerAccountNumber(),
                $shippingPaymentType,
                $request->getBillingAccountNumber()
            )
        );

        $requestedShipment->getInternationalDetail()->setContent(
            $request->getShipmentDetails()->getContentType()
        );

        $specialServicesList = [];
        if ($insurance = $request->getInsurance()) {
            $insuranceService = new Service(SpecialServices\ServiceType::TYPE_INSURANCE);
            $insuranceService->setServiceValue($insurance->getValue());
            $insuranceService->setCurrencyCode($insurance->getCurrencyCode());
            $specialServicesList[] = $insuranceService;
        }

        if (!empty($specialServicesList)) {
            $specialServices = new SpecialServices($specialServicesList);
            $requestedShipment->getShipmentInfo()->setSpecialServices($specialServices);
        }

        // Create dangerous goods
        if ($dryIce = $request->getDryIce()) {
            $requestedShipment->setDangerousGoods(
                new DangerousGoods(
                    new Content(
                        $dryIce->getContentId(),
                        number_format($dryIce->getWeight(), 2),
                        $dryIce->getUNCode()
                    )
                )
            );
        }

        return new SoapShipmentRequest($requestedShipment);
    }

    /**
     * @param PackageInterface[] $packages
     *
     * @return RequestedPackages[]
     */
    private function mapPackages(array $packages)
    {
        $requestedPackages = [];

        foreach ($packages as $package) {
            $requestedPackages[] = new RequestedPackages(
                $package->getWeight(),
                new Dimensions(
                    $package->getLength(),
                    $package->getWidth(),
                    $package->getHeight()
                ),
                $package->getCustomerReferences(),
                $package->getSequenceNumber()
            );
        }

        return $requestedPackages;
    }

    /**
     * Returns whether the pickup is a scheduled one or not.
     *
     * @param bool $isUnscheduledPickup Whether the pickup is a scheduled one or not
     *
     * @return string
     */
    public function getDropOfTypeFromShipDetails($isUnscheduledPickup)
    {
        if ($isUnscheduledPickup) {
            return ShipmentDetails::UNSCHEDULED_PICKUP;
        }

        return ShipmentDetails::REGULAR_PICKUP;
    }

    /**
     * Check if all packages have the same units of measurement (UOM) for weight and dimensions.
     *
     * @param array $packages The list of packages
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    private function checkConsistentUOM(array $packages)
    {
        $weightUom = null;
        $dimensionsUOM = null;

        /** @var PackageInterface $package */
        foreach ($packages as $package) {
            if (!$weightUom) {
                $weightUom = $package->getWeightUOM();
            }

            if (!$dimensionsUOM) {
                $dimensionsUOM = $package->getDimensionsUOM();
            }

            if ($weightUom !== $package->getWeightUOM()) {
                throw new \InvalidArgumentException(
                    'All packages weights must have a consistent unit of measurement.'
                );
            }

            if ($dimensionsUOM !== $package->getDimensionsUOM()) {
                throw new \InvalidArgumentException(
                    'All packages dimensions must have a consistent unit of measurement.'
                );
            }
        }
    }

    /**
     * Maps the magento unit of measurement to the DHL express unit of measurement.
     *
     * @param string $weightUOM     The unit of measurement for weight
     * @param string $dimensionsUOM The unit of measurement for dimensions
     *
     * @return string
     */
    private function mapUOM($weightUOM, $dimensionsUOM)
    {
        if (($weightUOM === Package::UOM_WEIGHT_KG) && ($dimensionsUOM === Package::UOM_DIMENSION_CM)) {
            return UnitOfMeasurement::SI;
        }

        if (($weightUOM === Package::UOM_WEIGHT_LB) && ($dimensionsUOM === Package::UOM_DIMENSION_IN)) {
            return UnitOfMeasurement::SU;
        }

        throw new \InvalidArgumentException(
            'All units of measurement have to be consistent (either metric system or US system).'
        );
    }
}
