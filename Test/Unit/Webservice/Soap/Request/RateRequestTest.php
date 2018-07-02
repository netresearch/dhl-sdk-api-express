<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap\Request;

use Dhl\Express\Test\Unit\Webservice\Soap\TestSoapClient;
use Dhl\Express\Webservice\Soap\Request\RateRequest;
use Dhl\Express\Webservice\Soap\Request\Value;

/**
 * Tests RateRequest
 */
class RateRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     *
     * @throws \ReflectionException
     */
    public function testRateRequestXmlMapping()
    {
        $shipperAddress = new Value\Address('Ichikawa-shi, Chiba', '272-0138', 'JP');
        $shipperAddress->setStreetLines('1-16-24, Minami-gyotoku');

        $recipientAddress = new Value\Address('QINGDAO SHI', '266033', 'CN');
        $recipientAddress->setStreetLines('63 RENMIN LU, QINGDAO SHI');

        $ship = new Value\RateRequest\Ship($shipperAddress, $recipientAddress);

        $requestedPackages = [
            new Value\RequestedPackages(2.5, new Value\Dimensions(1, 2, 3), 1),
            new Value\RequestedPackages(3.5, new Value\Dimensions(4, 5, 6), 2),
        ];

        $packages = new Value\Packages($requestedPackages);

        $requestedShipment = new Value\RateRequest\RequestedShipment(
            Value\DropOffType::REQUEST_COURIER,
            $ship,
            $packages,
            '2020-01-01T12:00:00GMT-06:00',
            Value\UnitOfMeasurement::SU
        );

        $specialServices = new Value\Services([
            (new Value\Service('II'))->setCurrencyCode('EUR')->setServiceValue(24.5),
            (new Value\Service('II')),
        ]);

        $requestedShipment->setNextBusinessDay(Value\NextBusinessDay::Y)
            ->setContent(Value\Content::NON_DOCUMENTS)
            ->setDeclaredValue('200')
            ->setDeclaredValueCurrencyCode('USD')
            ->setPaymentInfo(Value\PaymentInfo::DDP)
            ->setAccount('1234567890')
            ->setBilling(new Value\Billing('12345678', Value\ShipmentPaymentType::R))
            ->setSpecialServices($specialServices)
            ->setRequestValueAddedServices(Value\RequestValueAddedServices::Y);

        $clientDetail = new Value\ClientDetail();
        $clientDetail->setSso('SSO')
            ->setPlant('PLANT');

        $rateRequest = new RateRequest($requestedShipment);
        $rateRequest->setClientDetail($clientDetail);

        $soapClientMock = $this->getMockFromWsdl(
            __DIR__ . '/../Wsdl/expressRateBook.wsdl',
            TestSoapClient::class,
            '',
            [
                '__doRequest',
            ]
        );

        $soapClientMock->expects(self::any())
            ->method('__doRequest')
            ->with(self::callback(function ($requestXml) {
                self::assertInternalType('string', $requestXml);

                $document = new \DOMDocument();
                $document->loadXML($requestXml);

                $xPath = new \DOMXPath($document);

                $this->assertSame(1, (int) $xPath->evaluate('count(//ns1:RateRequest)'));

                // ClientDetail
                $this->assertSame('SSO', $xPath->query('//ClientDetail/sso/text()')->item(0)->textContent);
                $this->assertSame('PLANT', $xPath->query('//ClientDetail/plant/text()')->item(0)->textContent);

                // RequestShipment
                $this->assertSame(1, (int) $xPath->evaluate('count(//RequestedShipment)'));
                $this->assertSame(Value\DropOffType::REQUEST_COURIER, $xPath->query('//RequestedShipment/DropOffType/text()')->item(0)->textContent);
                $this->assertSame(Value\NextBusinessDay::Y, $xPath->query('//RequestedShipment/NextBusinessDay/text()')->item(0)->textContent);
                $this->assertSame('2020-01-01T12:00:00GMT-06:00', $xPath->query('//RequestedShipment/ShipTimestamp/text()')->item(0)->textContent);
                $this->assertSame(Value\UnitOfMeasurement::SU, $xPath->query('//RequestedShipment/UnitOfMeasurement/text()')->item(0)->textContent);
                $this->assertSame(Value\Content::NON_DOCUMENTS, $xPath->query('//RequestedShipment/Content/text()')->item(0)->textContent);
                $this->assertSame('200', $xPath->query('//RequestedShipment/DeclaredValue/text()')->item(0)->textContent);
                $this->assertSame('USD', $xPath->query('//RequestedShipment/DeclaredValueCurrencyCode/text()')->item(0)->textContent);
                $this->assertSame(Value\PaymentInfo::DDP, $xPath->query('//RequestedShipment/PaymentInfo/text()')->item(0)->textContent);
                $this->assertSame('1234567890', $xPath->query('//RequestedShipment/Account/text()')->item(0)->textContent);

                // Ship address
                $this->assertSame('1-16-24, Minami-gyotoku', $xPath->query('//Ship/Shipper/StreetLines/text()')->item(0)->textContent);
                $this->assertSame('Ichikawa-shi, Chiba', $xPath->query('//Ship/Shipper/City/text()')->item(0)->textContent);
                $this->assertSame('272-0138', $xPath->query('//Ship/Shipper/PostalCode/text()')->item(0)->textContent);
                $this->assertSame('JP', $xPath->query('//Ship/Shipper/CountryCode/text()')->item(0)->textContent);

                $this->assertSame('63 RENMIN LU, QINGDAO SHI', $xPath->query('//Ship/Recipient/StreetLines/text()')->item(0)->textContent);
                $this->assertSame('QINGDAO SHI', $xPath->query('//Ship/Recipient/City/text()')->item(0)->textContent);
                $this->assertSame('266033', $xPath->query('//Ship/Recipient/PostalCode/text()')->item(0)->textContent);
                $this->assertSame('CN', $xPath->query('//Ship/Recipient/CountryCode/text()')->item(0)->textContent);

                // Packages
                $this->assertSame(1, $xPath->query('//Packages')->length);
                $this->assertSame(2, (int) $xPath->evaluate('count(//RequestedPackages)'));

                $numberAttributes = $xPath->evaluate('//RequestedPackages/@number');
                $this->assertSame(1, (int) $numberAttributes->item(0)->textContent);
                $this->assertSame(2, (int) $numberAttributes->item(1)->textContent);

                // First package
                $this->assertSame(2.5, (float) $xPath->query('//RequestedPackages[1]/Weight/Value/text()')->item(0)->textContent);
                $this->assertSame(1, (int) $xPath->query('//RequestedPackages[1]/Dimensions/Length/text()')->item(0)->textContent);
                $this->assertSame(2, (int) $xPath->query('//RequestedPackages[1]/Dimensions/Width/text()')->item(0)->textContent);
                $this->assertSame(3, (int) $xPath->query('//RequestedPackages[1]/Dimensions/Height/text()')->item(0)->textContent);

                // Second package
                $this->assertSame(3.5, (float) $xPath->query('//RequestedPackages[2]/Weight/Value/text()')->item(0)->textContent);
                $this->assertSame(4, (int) $xPath->query('//RequestedPackages[2]/Dimensions/Length/text()')->item(0)->textContent);
                $this->assertSame(5, (int) $xPath->query('//RequestedPackages[2]/Dimensions/Width/text()')->item(0)->textContent);
                $this->assertSame(6, (int) $xPath->query('//RequestedPackages[2]/Dimensions/Height/text()')->item(0)->textContent);

                // Billing
                $this->assertSame(1, $xPath->query('//Billing')->length);
                $this->assertSame('12345678', $xPath->query('//Billing/ShipperAccountNumber/text()')->item(0)->textContent);
                $this->assertSame(Value\ShipmentPaymentType::R, $xPath->query('//Billing/ShippingPaymentType/text()')->item(0)->textContent);

                // SpecialServices
                $this->assertSame(1, $xPath->query('//SpecialServices')->length);
                $this->assertSame(2, (int) $xPath->evaluate('count(//SpecialServices/Service)'));
                $this->assertSame('II', $xPath->query('//SpecialServices/Service[1]/ServiceType/text()')->item(0)->textContent);
                $this->assertSame(24.5, (float) $xPath->query('//SpecialServices/Service[1]/ServiceValue/text()')->item(0)->textContent);
                $this->assertSame('EUR', $xPath->query('//SpecialServices/Service[1]/CurrencyCode/text()')->item(0)->textContent);

                $this->assertSame('II', $xPath->query('//SpecialServices/Service[2]/ServiceType/text()')->item(0)->textContent);

                return true;
            }))
            ->will(self::returnValue(''));

        $soapClientMock->__soapCall('getRateRequest', [ $rateRequest ]);
    }
}
