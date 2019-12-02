<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\Rate\PackageInterface;
use Dhl\Express\Model\Request\Rate\Package;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Ship;
use Dhl\Express\Webservice\Soap\Type\SoapRateRequest;
use InvalidArgumentException;

/**
 * Rate Request Mapper.
 *
 * Transform the rate request object into SOAP types suitable for API communication.
 *
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateRequestMapper
{
    /**
     * @param RateRequestInterface $rateRequest
     *
     * @return SoapRateRequest
     * @throws \Exception
     */
    public function map(RateRequestInterface $rateRequest)
    {
        $this->checkConsistentUOM($rateRequest->getPackages());

        // Since we checked that all packages use the same UOMs, we can just take them from any package
        $weightUOM = $rateRequest->getPackages()[0]->getWeightUOM();
        $dimensionsUOM = $rateRequest->getPackages()[0]->getDimensionsUOM();

        $requestedShipment = new RequestedShipment(
            $this->getDropOfTypeFromShipDetails(
                $rateRequest->getShipmentDetails()->isUnscheduledPickup()
            ),
            new Ship(
                new Address(
                    $rateRequest->getShipperAddress()->getCity(),
                    $rateRequest->getShipperAddress()->getPostalCode(),
                    $rateRequest->getShipperAddress()->getCountryCode()
                ),
                new Address(
                    $rateRequest->getRecipientAddress()->getCity(),
                    $rateRequest->getRecipientAddress()->getPostalCode(),
                    $rateRequest->getRecipientAddress()->getCountryCode()
                )
            ),
            new Packages(
                $this->mapPackages($rateRequest->getPackages())
            ),
            $rateRequest->getShipmentDetails()->getReadyAtTimestamp(),
            $this->mapUOM($weightUOM, $dimensionsUOM)
        );

        // TODO If using Billing, the "account" should be left out
        $requestedShipment->setAccount($rateRequest->getShipperAccountNumber());

        if ($rateRequest->getShipmentDetails()->getTermsOfTrade()) {
            $requestedShipment->setPaymentInfo($rateRequest->getShipmentDetails()->getTermsOfTrade());
        }

        $requestedShipment->setContent($rateRequest->getShipmentDetails()->getContentType());
        $requestedShipment->setRequestValueAddedServices(
            $rateRequest->getShipmentDetails()->isValueAddedServicesRequested()
        );
        $requestedShipment->setNextBusinessDay($rateRequest->getShipmentDetails()->isNextBusinessDayIndicator());

        $specialServicesList = [];
        if ($insurance = $rateRequest->getInsurance()) {
            $insuranceService = new Service(SpecialServices\ServiceType::TYPE_INSURANCE);
            $insuranceService->setServiceValue($insurance->getValue());
            $insuranceService->setCurrencyCode($insurance->getCurrencyCode());
            $specialServicesList[] = $insuranceService;
        }

        if (!empty($specialServicesList)) {
            $specialServices = new SpecialServices($specialServicesList);
            $requestedShipment->setSpecialServices($specialServices);
        }

        $recipientStreetLines = $rateRequest->getRecipientAddress()->getStreetLines();
        if ((count($recipientStreetLines) > 0) && !empty($recipientStreetLines[0])) {
            $requestedShipment->getShip()->getRecipient()->setStreetLines($recipientStreetLines[0]);
        }
        if ((count($recipientStreetLines) > 1) && !empty($recipientStreetLines[1])) {
            $requestedShipment->getShip()->getRecipient()->setStreetLines2($recipientStreetLines[1]);
        }
        if ((count($recipientStreetLines) > 2) && !empty($recipientStreetLines[2])) {
            $requestedShipment->getShip()->getRecipient()->setStreetLines3($recipientStreetLines[2]);
        }

        return new SoapRateRequest($requestedShipment);
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
     * @param PackageInterface[] $packages The list of packages
     *
     * @return void
     * @throws InvalidArgumentException
     */
    private function checkConsistentUOM(array $packages)
    {
        $weightUom = null;
        $dimensionsUOM = null;

        /** @var Package $package */
        foreach ($packages as $package) {
            if (!$weightUom) {
                $weightUom = $package->getWeightUOM();
            }

            if (!$dimensionsUOM) {
                $dimensionsUOM = $package->getDimensionsUOM();
            }

            if ($weightUom !== $package->getWeightUOM()) {
                throw new InvalidArgumentException(
                    'All packages weights must have a consistent unit of measurement.'
                );
            }

            if ($dimensionsUOM !== $package->getDimensionsUOM()) {
                throw new InvalidArgumentException(
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

        throw new InvalidArgumentException(
            'All units of measurement have to be consistent (either metric system or US system).'
        );
    }
}
