<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Rate\Package;
use Dhl\Express\Model\Request\Rate\RecipientAddress;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\Model\Request\Rate\ShipperAddress;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\ServiceType;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\SoapRateRequest;
use PHPUnit\Framework\TestCase;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateRequestMapperTest extends TestCase
{
    /**
     * @test
     * @throws \Exception
     */
    public function getSoapRateRequestFromRateRequest()
    {
        // Set up a RateRequest

        $shipperAddress = new ShipperAddress(
            'DE',
            '12345',
            'Berlin'
        );

        $shipperAccountNumber = 'XXXXXXXXX';

        $recipientAddress = new RecipientAddress(
            'DE',
            '12345',
            'Berlin',
            [
                'Sample street 5a',
                'Sample street 5b',
                'Sample street 5c'
            ]
        );

        $shipmentDetails = new ShipmentDetails(
            true,
            ShipmentDetails::PAYMENT_TYPE_CFR,
            ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            238948923,
            false,
            false
        );

        $package = new Package(
            1,
            1.123,
            Package::UOM_WEIGHT_KG,
            1.123,
            1.123,
            1.123,
            Package::UOM_DIMENSION_CM
        );

        $packages = [$package, $package];

        $insurance = new Insurance(99.99, 'EUR');

        $rateRequest = new RateRequest(
            $shipperAddress,
            $shipperAccountNumber,
            $recipientAddress,
            $shipmentDetails,
            $packages,
            $insurance
        );

        // Map Rate Request to SOAP Rate Request

        $rateRequestMapper = new RateRequestMapper();
        $soapRateRequest = $rateRequestMapper->map($rateRequest);

        // Assertions

        self::assertInstanceOf(SoapRateRequest::class, $soapRateRequest);

        self::assertEquals(
            $shipperAddress->getCity(),
            $soapRateRequest->getRequestedShipment()->getShip()->getShipper()->getCity()
        );
        self::assertEquals(
            $shipperAddress->getPostalCode(),
            $soapRateRequest->getRequestedShipment()->getShip()->getShipper()->getPostalCode()
        );
        self::assertEquals(
            $shipperAddress->getCountryCode(),
            $soapRateRequest->getRequestedShipment()->getShip()->getShipper()->getCountryCode()
        );

        self::assertEquals($shipperAccountNumber, $soapRateRequest->getRequestedShipment()->getAccount());

        self::assertEquals(
            $recipientAddress->getCountryCode(),
            $soapRateRequest->getRequestedShipment()->getShip()->getRecipient()->getCountryCode()
        );
        self::assertEquals(
            $recipientAddress->getPostalCode(),
            $soapRateRequest->getRequestedShipment()->getShip()->getRecipient()->getPostalCode()
        );

        if (count($recipientAddress->getStreetLines())) {
            self::assertEquals(
                $recipientAddress->getStreetLines()[0],
                $soapRateRequest->getRequestedShipment()->getShip()->getRecipient()->getStreetLines()
            );
        }

        if (count($recipientAddress->getStreetLines()) > 1) {
            self::assertEquals(
                $recipientAddress->getStreetLines()[1],
                $soapRateRequest->getRequestedShipment()->getShip()->getRecipient()->getStreetLines2()->__toString()
            );
        }

        if (count($recipientAddress->getStreetLines()) > 2) {
            self::assertEquals(
                $recipientAddress->getStreetLines()[2],
                $soapRateRequest->getRequestedShipment()->getShip()->getRecipient()->getStreetLines3()->__toString()
            );
        }

        self::assertEquals(DropOffType::REQUEST_COURIER, $soapRateRequest->getRequestedShipment()->getDropOffType());

        self::assertEquals(
            ShipmentDetails::PAYMENT_TYPE_CFR,
            $soapRateRequest->getRequestedShipment()->getPaymentInfo()
        );
        self::assertEquals(
            ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $soapRateRequest->getRequestedShipment()->getContent()
        );

        self::assertEquals(
            UnitOfMeasurement::SI,
            $soapRateRequest->getRequestedShipment()->getUnitOfMeasurement()
        );

        /**
         * @Todo Test $weightUOM
         */

        /** @var RequestedPackages $soapPackage */
        $soapPackage = $soapRateRequest->getRequestedShipment()->getPackages()->getRequestedPackages()[0];
        self::assertSameSize(
            $packages,
            $soapRateRequest->getRequestedShipment()->getPackages()->getRequestedPackages()
        );
        self::assertEquals($package->getSequenceNumber(), $soapPackage->getNumber());
        self::assertEquals(
            $shipmentDetails->getReadyAtTimestamp(),
            \DateTime::createFromFormat(
                'Y-m-d\TH:i:s \G\M\TP',
                $soapRateRequest->getRequestedShipment()->getShipTimestamp()
            )->getTimestamp()
        );

        self::assertEquals($package->getHeight(), $soapPackage->getDimensions()->getHeight()->getValue());
        self::assertEquals($package->getWidth(), $soapPackage->getDimensions()->getWidth()->getValue());
        self::assertEquals($package->getLength(), $soapPackage->getDimensions()->getLength()->getValue());
        self::assertEquals($package->getWeight(), $soapPackage->getWeight()->getValue());

        /**
         * @var Service[] $soapSpecialServices
         */
        $soapSpecialServices = $soapRateRequest->getRequestedShipment()->getSpecialServices()->getService();

        /**
         * @var Service $soapService
         */
        foreach ($soapSpecialServices as $soapService) {
            if ($soapService->getServiceType() === ServiceType::TYPE_INSURANCE) {
                self::assertInstanceOf(Service::class, $soapService);
                self::assertSame($insurance->getCurrencyCode(), $soapService->getCurrencyCode());
                self::assertSame($insurance->getValue(), $soapService->getServiceValue()->getValue());
            }
        }
    }
}
