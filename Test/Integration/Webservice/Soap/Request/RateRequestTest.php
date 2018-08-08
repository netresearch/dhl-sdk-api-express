<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\Common\Billing;
use Dhl\Express\Webservice\Soap\Type\Common\Billing\ShippingPaymentType;
use Dhl\Express\Webservice\Soap\Type\Common\ClientDetail;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\PaymentInfo;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\ServiceType;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\SoapRateRequest;
use Dhl\Express\Webservice\Soap\Type\RateRequest\NextBusinessDay;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Ship;

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
        $shipperAddress = new Address('Ichikawa-shi, Chiba', '272-0138', 'JP');
        $shipperAddress->setStreetLines('1-16-24, Minami-gyotoku');

        $recipientAddress = new Address('QINGDAO SHI', '266033', 'CN');
        $recipientAddress->setStreetLines('63 RENMIN LU, QINGDAO SHI');

        $ship = new Ship($shipperAddress, $recipientAddress);

        $requestedPackages = [
            new RequestedPackages(2.5, new Dimensions(1, 2, 3), 1),
            new RequestedPackages(3.5, new Dimensions(4, 5, 6), 2),
        ];

        $shipTimestamp = (new \DateTime())
            ->setTime(10, 0)
            ->modify('+6 hours');

        $packages = new Packages($requestedPackages);

        $requestedShipment = new RequestedShipment(
            DropOffType::REQUEST_COURIER,
            $ship,
            $packages,
            $shipTimestamp,
            UnitOfMeasurement::SU
        );

        $specialServices = new SpecialServices([
            (new Service(ServiceType::TYPE_INSURANCE))
                ->setCurrencyCode('EUR')
                ->setServiceValue(24.5),
            (new Service(ServiceType::TYPE_INSURANCE)),
        ]);

        $requestedShipment->setNextBusinessDay(true)
            ->setContent(Content::NON_DOCUMENTS)
            ->setDeclaredValue('200')
            ->setDeclaredValueCurrencyCode('USD')
            ->setPaymentInfo(PaymentInfo::DDP)
            ->setAccount('123456789')
            ->setBilling(new Billing('12345678', ShippingPaymentType::S))
            ->setSpecialServices($specialServices)
            ->setRequestValueAddedServices(true);

        $clientDetail = new ClientDetail();
        $clientDetail->setSso('SSO')
            ->setPlant('PLANT');

        $rateRequest = new SoapRateRequest($requestedShipment);
        $rateRequest->setClientDetail($clientDetail);

        $soapClientMock = $this->getMockFromWsdl(
            WsdlProvider::getWsdlFile(),
            SoapClientFake::class,
            '',
            [
                '__doRequest',
            ]
        );

        $soapClientMock->expects(self::any())
            ->method('__doRequest')
            ->willReturnCallback(function ($requestXml) use ($shipTimestamp) {
                self::assertInternalType('string', $requestXml);

                $document = new \DOMDocument();
                $document->loadXML($requestXml);

                $xPath = new \DOMXPath($document);

                $this->assertSame(1, (int)$xPath->evaluate('count(//ns1:RateRequest)'));

                // ClientDetail
                $this->assertSame('SSO', $xPath->query('//ClientDetail/sso/text()')->item(0)->textContent);
                $this->assertSame('PLANT', $xPath->query('//ClientDetail/plant/text()')->item(0)->textContent);

                // RequestShipment
                $this->assertSame(
                    1,
                    (int)$xPath->evaluate('count(//RequestedShipment)')
                );
                $this->assertSame(
                    DropOffType::REQUEST_COURIER,
                    $xPath->query('//RequestedShipment/DropOffType/text()')->item(0)->textContent
                );
                $this->assertSame(
                    NextBusinessDay::Y,
                    $xPath->query('//RequestedShipment/NextBusinessDay/text()')->item(0)->textContent
                );
                $this->assertSame(
                    $shipTimestamp->format('Y-m-d\TH:i:s \G\M\TP'),
                    $xPath->query('//RequestedShipment/ShipTimestamp/text()')->item(0)->textContent
                );
                $this->assertSame(
                    UnitOfMeasurement::SU,
                    $xPath->query('//RequestedShipment/UnitOfMeasurement/text()')->item(0)->textContent
                );
                $this->assertSame(
                    Content::NON_DOCUMENTS,
                    $xPath->query('//RequestedShipment/Content/text()')->item(0)->textContent
                );
                $this->assertSame(
                    '200',
                    $xPath->query('//RequestedShipment/DeclaredValue/text()')->item(0)->textContent
                );
                $this->assertSame(
                    'USD',
                    $xPath->query('//RequestedShipment/DeclaredValueCurrencyCode/text()')->item(0)->textContent
                );
                $this->assertSame(
                    PaymentInfo::DDP,
                    $xPath->query('//RequestedShipment/PaymentInfo/text()')->item(0)->textContent
                );
                $this->assertSame(
                    '123456789',
                    $xPath->query('//RequestedShipment/Account/text()')->item(0)->textContent
                );

                // Ship address
                $this->assertSame(
                    '1-16-24, Minami-gyotoku',
                    $xPath->query('//Ship/Shipper/StreetLines/text()')->item(0)->textContent
                );
                $this->assertSame(
                    'Ichikawa-shi, Chiba',
                    $xPath->query('//Ship/Shipper/City/text()')->item(0)->textContent
                );
                $this->assertSame(
                    '272-0138',
                    $xPath->query('//Ship/Shipper/PostalCode/text()')->item(0)->textContent
                );
                $this->assertSame(
                    'JP',
                    $xPath->query('//Ship/Shipper/CountryCode/text()')->item(0)->textContent
                );

                $this->assertSame(
                    '63 RENMIN LU, QINGDAO SHI',
                    $xPath->query('//Ship/Recipient/StreetLines/text()')->item(0)->textContent
                );
                $this->assertSame(
                    'QINGDAO SHI',
                    $xPath->query('//Ship/Recipient/City/text()')->item(0)->textContent
                );
                $this->assertSame(
                    '266033',
                    $xPath->query('//Ship/Recipient/PostalCode/text()')->item(0)->textContent
                );
                $this->assertSame(
                    'CN',
                    $xPath->query('//Ship/Recipient/CountryCode/text()')->item(0)->textContent
                );

                // Packages
                $this->assertSame(1, $xPath->query('//Packages')->length);
                $this->assertSame(2, (int)$xPath->evaluate('count(//RequestedPackages)'));

                $numberAttributes = $xPath->evaluate('//RequestedPackages/@number');
                $this->assertSame(1, (int)$numberAttributes->item(0)->textContent);
                $this->assertSame(2, (int)$numberAttributes->item(1)->textContent);

                // First package
                $this->assertSame(
                    2.5,
                    (float)$xPath->query('//RequestedPackages[1]/Weight/Value/text()')->item(0)->textContent
                );
                $this->assertSame(
                    1,
                    (int)$xPath->query('//RequestedPackages[1]/Dimensions/Length/text()')->item(0)->textContent
                );
                $this->assertSame(
                    2,
                    (int)$xPath->query('//RequestedPackages[1]/Dimensions/Width/text()')->item(0)->textContent
                );
                $this->assertSame(
                    3,
                    (int)$xPath->query('//RequestedPackages[1]/Dimensions/Height/text()')->item(0)->textContent
                );

                // Second package
                $this->assertSame(
                    3.5,
                    (float)$xPath->query('//RequestedPackages[2]/Weight/Value/text()')->item(0)->textContent
                );
                $this->assertSame(
                    4,
                    (int)$xPath->query('//RequestedPackages[2]/Dimensions/Length/text()')->item(0)->textContent
                );
                $this->assertSame(
                    5,
                    (int)$xPath->query('//RequestedPackages[2]/Dimensions/Width/text()')->item(0)->textContent
                );
                $this->assertSame(
                    6,
                    (int)$xPath->query('//RequestedPackages[2]/Dimensions/Height/text()')->item(0)->textContent
                );

                // Billing
                $this->assertSame(1, $xPath->query('//Billing')->length);
                $this->assertSame(
                    '12345678',
                    $xPath->query('//Billing/ShipperAccountNumber/text()')->item(0)->textContent
                );
                $this->assertSame(
                    ShippingPaymentType::S,
                    $xPath->query('//Billing/ShippingPaymentType/text()')->item(0)->textContent
                );

                // SpecialServices
                $this->assertSame(1, $xPath->query('//SpecialServices')->length);
                $this->assertSame(2, (int)$xPath->evaluate('count(//SpecialServices/Service)'));
                $this->assertSame(
                    ServiceType::TYPE_INSURANCE,
                    $xPath->query('//SpecialServices/Service[1]/ServiceType/text()')->item(0)->textContent
                );
                $this->assertSame(
                    24.5,
                    (float)$xPath->query('//SpecialServices/Service[1]/ServiceValue/text()')->item(0)->textContent
                );
                $this->assertSame(
                    'EUR',
                    $xPath->query('//SpecialServices/Service[1]/CurrencyCode/text()')->item(0)->textContent
                );

                $this->assertSame(
                    ServiceType::TYPE_INSURANCE,
                    $xPath->query('//SpecialServices/Service[2]/ServiceType/text()')->item(0)->textContent
                );

                return '';
            });

        $soapClientMock->getRate Request($rateRequest);
    }
}
