<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Shipment\DangerousGoods\DryIce;
use Dhl\Express\Model\Request\Shipment\Package;
use Dhl\Express\Model\Request\Shipment\Recipient;
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
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentRequestMapperTest extends TestCase
{
    /**
     * @test
     */
    public function getSoapRateRequestFromRateRequest()
    {
        // Set up a ShipmentRequest

        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = true,
            $termsOfTrade = ShipmentDetails::PAYMENT_TYPE_CFR,
            $contentType = ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $readyAtTimestamp = 238948923,
            $numberOfPieces = 12,
            $currencyCode = 'EUR',
            $desciption = 'a description.',
            $serviceType = 'U'
        );

        $payerAccountNumber = 'XXXXXXXXX';

        $insurance = new Insurance(99.99, 'EUR');

        $shipper = new Shipper(
            $countryCode = 'DE',
            $postalCode = '12345',
            $city = 'Berlin',
            $streetLines = [
                'Sample street 5a',
                'Sample street 5b',
                'Sample street 5c'
            ],
            $name = 'Max Mustermann',
            $company = 'Acme',
            $phone = '004922832432423'
        );

        $recipient = new Recipient(
            $countryCode = 'DE',
            $postalCode = '12345',
            $city = 'Berlin',
            $streetLines = [
                'Sample street 5a',
                'Sample street 5b',
                'Sample street 5c'
            ],
            $name = 'Max Mustermann',
            $company = 'Acme',
            $phone = '004922832432423'
        );

        $package = new Package(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM = Package::UOM_WEIGHT_KG,
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionsUOM = Package::UOM_DIMENSION_CM,
            $customerReferences = 'TEST CZ-IT'
        );

        $packages = [$package, $package];

        $dryIce = new DryIce(
            $unCode = ' UN1845',
            $weight = 20.53
        );

        $request = new ShipmentRequest(
            $shipmentDetails,
            $payerAccountNumber,
            $insurance,
            $shipper,
            $recipient,
            $packages,
            $dryIce
        );

        // Map Shipment Request to SOAP Shipment Request

        $shipmentRequestMapper = new ShipmentRequestMapper();
        $soapRequest = $shipmentRequestMapper->map($request);

        // Assertions

        $this->assertInstanceOf(SoapShipmentRequest::class, $soapRequest);

        $this->assertEquals(
            DropOffType::REQUEST_COURIER,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getDropOffType()
        );

        $this->assertEquals(
            ShipmentDetails::PAYMENT_TYPE_CFR,
            $soapRequest->getRequestedShipment()->getPaymentInfo()
        );

        $this->assertEquals(
            ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $soapRequest->getRequestedShipment()->getInternationalDetail()->getContent()
        );

        $this->assertEquals(
            $readyAtTimestamp,
            \DateTime::createFromFormat(
                'Y-m-d\TH:i:s \G\M\TP',
                $soapRequest->getRequestedShipment()->getShipTimestamp()
            )->getTimestamp()
        );

        $this->assertEquals(
            $currencyCode,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getCurrency()
        );

        $this->assertEquals(
            $desciption,
            $soapRequest->getRequestedShipment()->getInternationalDetail()->getCommodities()->getDescription()
        );

        $this->assertEquals(
            $serviceType,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getServiceType()
        );

        $this->assertEquals(
            $payerAccountNumber,
            $soapRequest->getRequestedShipment()->getShipmentInfo()->getAccount()
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
                $this->assertInstanceOf(Service::class, $soapService);
                $this->assertSame($insurance->getCurrencyCode(), $soapService->getCurrencyCode());
                $this->assertSame($insurance->getValue(), $soapService->getServiceValue()->getValue());
            }
        }

        $this->assertEquals(
            $shipper->getCountryCode(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getCountryCode()
        );

        $this->assertEquals(
            $shipper->getPostalCode(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getPostalCode()
        );

        $this->assertEquals(
            $shipper->getCity(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getCity()
        );

        if (count($shipper->getStreetLines())) {
            $this->assertEquals(
                $shipper->getStreetLines()[0],
                $soapRequest->getRequestedShipment()->getShip()->getShipper()->getAddress()->getStreetLines()
            );
        }

        if (count($shipper->getStreetLines()) > 1) {
            $this->assertEquals(
                $shipper->getStreetLines()[1],
                $soapRequest->getRequestedShipment()->getShip()->getShipper()
                    ->getAddress()->getStreetLines2()->__toString()
            );
        }

        if (count($shipper->getStreetLines()) > 2) {
            $this->assertEquals(
                $shipper->getStreetLines()[2],
                $soapRequest->getRequestedShipment()->getShip()->getShipper()
                    ->getAddress()->getStreetLines3()->__toString()
            );
        }

        $this->assertEquals(
            $shipper->getName(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getContact()->getPersonName()
        );

        $this->assertEquals(
            $shipper->getCompany(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getContact()->getCompanyName()
        );

        $this->assertEquals(
            $shipper->getPhone(),
            $soapRequest->getRequestedShipment()->getShip()->getShipper()->getContact()->getPhoneNumber()
        );

        $this->assertEquals(
            $recipient->getCountryCode(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getCountryCode()
        );

        $this->assertEquals(
            $recipient->getPostalCode(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getPostalCode()
        );

        $this->assertEquals(
            $recipient->getCity(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getCity()
        );

        if (count($recipient->getStreetLines())) {
            $this->assertEquals(
                $recipient->getStreetLines()[0],
                $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getStreetLines()
            );
        }

        if (count($recipient->getStreetLines()) > 1) {
            $this->assertEquals(
                $recipient->getStreetLines()[1],
                $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getStreetLines2()
            );
        }

        if (count($recipient->getStreetLines()) > 2) {
            $this->assertEquals(
                $recipient->getStreetLines()[2],
                $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getAddress()->getStreetLines3()
            );
        }

        $this->assertEquals(
            $recipient->getName(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getContact()->getPersonName()
        );

        $this->assertEquals(
            $recipient->getCompany(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getContact()->getCompanyName()
        );

        $this->assertEquals(
            $recipient->getPhone(),
            $soapRequest->getRequestedShipment()->getShip()->getRecipient()->getContact()->getPhoneNumber()
        );

        /**
         * @var RequestedPackages $soapPackage
         */
        $soapPackage = $soapRequest->getRequestedShipment()->getPackages()->getRequestedPackages()[0];
        $this->assertSameSize(
            $packages,
            $soapRequest->getRequestedShipment()->getPackages()->getRequestedPackages()
        );
        $this->assertEquals($package->getSequenceNumber(), $soapPackage->getNumber());
        $this->assertEquals(
            $shipmentDetails->getReadyAtTimestamp(),
            \DateTime::createFromFormat(
                'Y-m-d\TH:i:s \G\M\TP',
                $soapRequest->getRequestedShipment()->getShipTimestamp()
            )->getTimestamp()
        );

        $this->assertEquals(
            $dryIce->getContentId(),
            $soapRequest->getRequestedShipment()->getDangerousGoods()->getContent()->getContentId()
        );

        $this->assertEquals(
            $dryIce->getWeight(),
            $soapRequest->getRequestedShipment()->getDangerousGoods()
                ->getContent()->getDryIceTotalNetWeight()->__toString()
        );

        $this->assertEquals(
            $dryIce->getUnCode(),
            $soapRequest->getRequestedShipment()->getDangerousGoods()->getContent()->getUNCode()
        );
    }
}
