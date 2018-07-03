<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Api\Data\Request\SpecialServiceInterface;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Webservice\Converter\RateServiceConverterInterface;
use Dhl\Express\Webservice\Soap\Request\RateRequest;
use Dhl\Express\Webservice\Soap\Request\Value\Services;
use Dhl\Express\Webservice\Soap\Request\Value\Service;
use Dhl\Express\Webservice\Soap\Response\RateResponse;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Webservice\Soap\Request\Value\RequestedPackages;
use Dhl\Express\Webservice\Soap\Request\Value\RateRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Request\Value\RateRequest\Ship;
use Dhl\Express\Webservice\Soap\Request\Value\Address;
use Dhl\Express\Webservice\Soap\Request\Value\Packages;
use Dhl\Express\Webservice\Soap\Request\Value\Dimensions;

/**
 * Service Service Converter Interface.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateServiceConverter implements RateServiceConverterInterface
{
    /**
     * @param RateRequestInterface $rateRequest
     * @return RateRequest
     */
    public function convertRequestToSoap(RateRequestInterface $rateRequest): RateRequest
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
                $this->convertPackagesToSoap($rateRequest->getPackages())
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
        /**
         * @var SpecialServiceInterface $specialService
         */
        foreach ($rateRequest->getSpecialServices() as $specialService) {
            $service = new Service($specialService->getServiceType());
            $service->setServiceValue($specialService->getValue());
            $service->setCurrencyCode($specialService->getCurrencyCode());
            $specialServicesList[] = $service;
        }
        $specialServices = new Services($specialServicesList);
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
     * @param RateResponse $rateResponse
     * @return RateResponseInterface
     */
    public function convertResponseToApi(RateResponse $rateResponse): RateResponseInterface
    {
        // TODO: Implement convertResponseToApi() method.
    }

    /**
     * @param PackageInterface[] $packages
     * @return RequestedPackages[]
     */
    private function convertPackagesToSoap(array $packages)
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
     * Convert date string to UNIX timestamp (e.g. to '2018-11-26T12:00:00GMT-06:00' to 238948923)
     * @param string $shipTime
     * @return int
     */
    public function convertShipTimeStringToTimeStamp(string $shipTime): int
    {
        return strtotime($shipTime);
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
}
