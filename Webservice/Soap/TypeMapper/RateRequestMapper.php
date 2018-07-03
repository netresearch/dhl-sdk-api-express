<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\SpecialServiceInterface;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;
use Dhl\Express\Webservice\Soap\Type\RateRequest;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Ship;

/**
 * Rate Request Mapper.
 *
 * Transform the rate request object into SOAP types suitable for API communication.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequestMapper
{
    /**
     * @param RateRequestInterface $rateRequest
     * @return RateRequest
     */
    public function map(RateRequestInterface $rateRequest)
    {
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
            $this->convertShipTimeStringToTimeStamp(
                $rateRequest->getShipmentDetails()->getReadyAtTimestamp()
            ),
            $rateRequest->getShipmentDetails()->getDimensionsUOM()
        );

        $requestedShipment->setAccount($rateRequest->getShipperAccountNumber());
        $requestedShipment->setPaymentInfo($rateRequest->getShipmentDetails()->getTermsOfTrade());
        $requestedShipment->setContent($rateRequest->getShipmentDetails()->getContentType());

        $specialServicesList = [];
        if ($insurance = $rateRequest->getInsurance()) {
            $insuranceService = new Service('II');
            $insuranceService->setServiceValue($insurance->getValue());
            $insuranceService->setCurrencyCode($insurance->getCurrencyCode());
            $specialServicesList[] = $insuranceService;
        }
        $specialServices = new SpecialServices($specialServicesList);
        $requestedShipment->setSpecialServices($specialServices);

        $streetLines = $rateRequest->getRecipientAddress()->getStreetLines();

        if (count($streetLines)) {
            $requestedShipment->getShip()->getRecipient()->setStreetLines($streetLines[0]);
        }

        if (count($streetLines) > 1) {
            $requestedShipment->getShip()->getRecipient()->setStreetLines2($streetLines[1]);
        }

        if (count($streetLines) > 2) {
            $requestedShipment->getShip()->getRecipient()->setStreetLines3($streetLines[2]);
        }

        return new RateRequest($requestedShipment);
    }

    /**
     * @param PackageInterface[] $packages
     * @return RequestedPackages[]
     */
    private function mapPackages(array $packages)
    {
        $soapRequestedPackages = [];
        foreach ($packages as $package) {
            $soapRequestedPackages[] = new RequestedPackages(
                $package->getWeight(),
                new Dimensions(
                    $package->getLength(),
                    $package->getWidth(),
                    $package->getHeight()
                ),
                $package->getSequenceNumber()
            );
        }

        return $soapRequestedPackages;
    }

    /**
     * @param bool $isUnscheduledPickup
     * @return string
     */
    public function getDropOfTypeFromShipDetails(bool $isUnscheduledPickup): string
    {
        if ($isUnscheduledPickup) {
            return ShipmentDetails::UNSCHEDULED_PICKUP;
        }

        return ShipmentDetails::REGULAR_PICKUP;
    }

    /**
     * Convert date string to UNIX timestamp (e.g. to '2018-11-26T12:00:00GMT-06:00' to 238948923)
     * @param string $shipTime
     * @return int
     */
    public function convertShipTimeStringToTimeStamp(string $shipTime): int
    {
        return strtotime($shipTime);
    }
}
