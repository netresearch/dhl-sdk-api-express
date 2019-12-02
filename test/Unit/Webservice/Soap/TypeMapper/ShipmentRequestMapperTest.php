<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Shipment\DangerousGoods\DryIce;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\Recipient;
use Dhl\Express\Model\Request\Shipment\ShipmentDetails;
use Dhl\Express\Model\Request\Shipment\Shipper;
use Dhl\Express\Model\ShipmentRequest;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\ServiceType;
use Dhl\Express\Webservice\Soap\Type\SoapShipmentRequest;
use PHPUnit\Framework\TestCase;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentRequestMapperTest extends TestCase
{
    /**
     * @test
     * @throws \Exception
     */
    public function getSoapRateRequestFromRateRequest()
    {
        // Set up a ShipmentRequest

        $shipmentDetails = new ShipmentDetails(
            true,
            ShipmentDetails::PAYMENT_TYPE_CFR,
            ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $readyAtTimestamp = 238948923,
            12,
            $currencyCode = 'EUR',
            $description = 'a description.',
            $customsValue = 1.0,
            $serviceType = 'U'
        );

        $payerAccountNumber = 'XXXXXXXXX';

        $insurance = new Insurance(99.99, 'EUR');

        $shipper = new Shipper(
            'DE',
            '12345',
            'Berlin',
            [
                'Sample street 5a',
                'Sample street 5b',
                'Sample street 5c'
            ],
            'Max Mustermann',
            'Acme',
            '004922832432423'
        );

        $recipient = new Recipient(
            'DE',
            '12345',
            'Berlin',
            [
                'Sample street 5a',
                'Sample street 5b',
                'Sample street 5c'
            ],
            'Max Mustermann',
            'Acme',
            '004922832432423'
        );

        $package = new Package(
            1,
            1.123,
            Package::UOM_WEIGHT_KG,
            1.123,
            1.123,
            1.123,
            Package::UOM_DIMENSION_CM,
            'TEST CZ-IT'
        );

        $packages = [$package, $package];

        $dryIce = new DryIce(
            'UN1845',
            20.53
        );

        $request = new ShipmentRequest(
            $shipmentDetails,
            $payerAccountNumber,
            $shipper,
            $recipient,
            $packages
        );

        $request->setBillingAccountNumber('123456789');

        $request->setInsurance($insurance)
            ->setDryIce($dryIce);

        // Map Shipment Request to SOAP Shipment Request

        $shipmentRequestMapper = new ShipmentRequestMapper();
        $soapRequest = $shipmentRequestMapper->map($request);

        // Assertions

        self::assertInstanceOf(SoapShipmentRequest::class, $soapRequest);

        self::assertEquals(
            DropOffType::REQUEST_COURIER,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getDropOffType()
        );

        self::assertEquals(
            ShipmentDetails::PAYMENT_TYPE_CFR,
            $soapRequest->getRequestedShipment()->getPaymentInfo()
        );

        self::assertEquals(
            ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $soapRequest->getRequestedShipment()->getInternationalDetail()->getContent()
        );

        self::assertEquals(
            $readyAtTimestamp,
            \DateTime::createFromFormat(
                'Y-m-d\TH:i:s \G\M\TP',
                $soapRequest->getRequestedShipment()->getShipTimestamp()
            )->getTimestamp()
        );

        self::assertEquals(
            $currencyCode,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getCurrency()
        );

        self::assertEquals(
            $description,
            $soapRequest->getRequestedShipment()->getInternationalDetail()->getCommodities()->getDescription()
        );

        self::assertEquals(
            $customsValue,
            $soapRequest->getRequestedShipment()->getInternationalDetail()->getCommodities()->getCustomsValue()->getValue()
        );

        self::assertEquals(
            $serviceType,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getServiceType()
        );

        self::assertEquals(
            $payerAccountNumber,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getBilling()->getShipperAccountNumber()
        );

        self::assertEquals(
            '123456789',
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getBilling()->getBillingAccountNumber()
        );

        /**
         * @var Service[] $soapSpecialServices
         */
        $soapSpecialServices = $soapRequest->getRequestedShipment()
            ->getShipmentInfo()->getSpecialServices()->getService();

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

        self::assertEquals(
            $shipper->getCountryCode(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getCountryCode()
        );

        self::assertEquals(
            $shipper->getPostalCode(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getPostalCode()
        );

        self::assertEquals(
            $shipper->getCity(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getCity()
        );

        if (count($shipper->getStreetLines())) {
            self::assertEquals(
                $shipper->getStreetLines()[0],
                $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getStreetLines()
            );
        }

        if (count($shipper->getStreetLines()) > 1) {
            self::assertEquals(
                $shipper->getStreetLines()[1],
                $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getStreetLines2()
            );
        }

        if (count($shipper->getStreetLines()) > 2) {
            self::assertEquals(
                $shipper->getStreetLines()[2],
                $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getStreetLines3()
            );
        }

        self::assertEquals(
            $shipper->getName(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getContact()->getPersonName()
        );

        self::assertEquals(
            $shipper->getCompany(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getContact()->getCompanyName()
        );

        self::assertEquals(
            $shipper->getPhone(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getContact()->getPhoneNumber()
        );

        self::assertEquals(
            $recipient->getCountryCode(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getCountryCode()
        );

        self::assertEquals(
            $recipient->getPostalCode(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getPostalCode()
        );

        self::assertEquals(
            $recipient->getCity(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getCity()
        );

        if (count($recipient->getStreetLines())) {
            self::assertEquals(
                $recipient->getStreetLines()[0],
                $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getStreetLines()
            );
        }

        if (count($recipient->getStreetLines()) > 1) {
            self::assertEquals(
                $recipient->getStreetLines()[1],
                $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getStreetLines2()
            );
        }

        if (count($recipient->getStreetLines()) > 2) {
            self::assertEquals(
                $recipient->getStreetLines()[2],
                $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getStreetLines3()
            );
        }

        self::assertEquals(
            $recipient->getName(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getContact()->getPersonName()
        );

        self::assertEquals(
            $recipient->getCompany(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getContact()->getCompanyName()
        );

        self::assertEquals(
            $recipient->getPhone(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getContact()->getPhoneNumber()
        );

        /**
         * @var RequestedPackages $soapPackage
         */
        $soapPackages = $soapRequest->getRequestedShipment()->getPackages()->getRequestedPackages();

        foreach ($soapPackages as $soapPackage) {
            self::assertEquals(
                $package->getSequenceNumber(),
                $soapPackage->getNumber()
            );
        }

        self::assertEquals(
            $shipmentDetails->getReadyAtTimestamp(),
            \DateTime::createFromFormat(
                'Y-m-d\TH:i:s \G\M\TP',
                $soapRequest->getRequestedShipment()->getShipTimestamp()
            )->getTimestamp()
        );

        self::assertEquals(
            $dryIce->getContentId(),
            $soapRequest->getRequestedShipment()->getDangerousGoods()->getContent()->getContentId()
        );

        self::assertEquals(
            $dryIce->getWeight(),
            (float) (string) $soapRequest->getRequestedShipment()->getDangerousGoods()
                ->getContent()->getDryIceTotalNetWeight()
        );

        self::assertEquals(
            $dryIce->getUNCode(),
            $soapRequest->getRequestedShipment()->getDangerousGoods()->getContent()->getUNCode()
        );
    }
}
