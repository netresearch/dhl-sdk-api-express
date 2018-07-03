<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap\Request;

use Dhl\Express\Test\Unit\Webservice\Soap\TestSoapClient;
use Dhl\Express\Webservice\Soap\Request\ShipmentRequest;
use Dhl\Express\Webservice\Soap\Request\Value;

/**
 * Tests ShipmentRequest
 */
class ShipmentRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     *
     * @throws \ReflectionException
     */
    public function testCreateShipmentRequestXmlMapping()
    {
        ini_set('xdebug.var_display_max_children', -1);
        ini_set('xdebug.var_display_max_data', -1);
        ini_set('xdebug.var_display_max_depth', -1);

        $shipmentInfo = new Value\ShipmentRequest\ShipmentInfo(
            Value\DropOffType::REGULAR_PICKUP,
            'X',
            'EUR',
            Value\UnitOfMeasurement::SI
        );

        $shipmentInfo->setAccount('12345678')
            ->setBilling(new Value\Billing('12345678', Value\ShipmentPaymentType::R))
            ->setLabelType('PDF')
            ->setLabelTemplate('TEMPLATE')
            ->setArchiveLabelTemplate('TEMPLATE')
            ->setSpecialServices(
                new Value\Services([
                     (new Value\Service('II'))->setCurrencyCode('EUR')->setServiceValue(123.45)
                ])
            );

        $requestedShipment = new Value\ShipmentRequest\RequestedShipment(
            $shipmentInfo,
            '2020-01-01T12:00:00GMT-06:00'

        );

        $requestedShipment->setPickupLocation('Leipzig')
            ->setPickupLocationCloseTime('23:45')
            ->setInternationalDetail('Liegt unter dem Gartentisch');

        $clientDetail = new Value\ClientDetail();
        $clientDetail->setSso('SSO')
            ->setPlant('PLANT');

        $shipmentRequest = new ShipmentRequest($requestedShipment);
        $shipmentRequest->setClientDetail($clientDetail);

var_dump($shipmentRequest);
exit;


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

var_dump($requestXml);
exit;

//                self::assertInternalType('string', $requestXml);
//
//                $document = new \DOMDocument();
//                $document->loadXML($requestXml);
//
//                $xPath = new \DOMXPath($document);
//
//                $this->assertSame(1, (int) $xPath->evaluate('count(//ns1:RateRequest)'));
//
//                // ClientDetail
//                $this->assertSame('SSO', $xPath->query('//ClientDetail/sso/text()')->item(0)->textContent);
//                $this->assertSame('PLANT', $xPath->query('//ClientDetail/plant/text()')->item(0)->textContent);
//
//                // RequestShipment
//                $this->assertSame(1, (int) $xPath->evaluate('count(//RequestedShipment)'));
//                $this->assertSame(DropOffType::REQUEST_COURIER, $xPath->query('//RequestedShipment/DropOffType/text()')->item(0)->textContent);
//                $this->assertSame(NextBusinessDay::Y, $xPath->query('//RequestedShipment/NextBusinessDay/text()')->item(0)->textContent);
//                $this->assertSame('2020-01-01T12:00:00GMT-06:00', $xPath->query('//RequestedShipment/ShipTimestamp/text()')->item(0)->textContent);
//                $this->assertSame(UnitOfMeasurement::SU, $xPath->query('//RequestedShipment/UnitOfMeasurement/text()')->item(0)->textContent);
//                $this->assertSame(Content::NON_DOCUMENTS, $xPath->query('//RequestedShipment/Content/text()')->item(0)->textContent);
//                $this->assertSame('200', $xPath->query('//RequestedShipment/DeclaredValue/text()')->item(0)->textContent);
//                $this->assertSame('USD', $xPath->query('//RequestedShipment/DeclaredValueCurrencyCode/text()')->item(0)->textContent);
//                $this->assertSame(PaymentInfo::DDP, $xPath->query('//RequestedShipment/PaymentInfo/text()')->item(0)->textContent);
//                $this->assertSame('1234567890', $xPath->query('//RequestedShipment/Account/text()')->item(0)->textContent);
//
//                // Ship address
//                $this->assertSame('1-16-24, Minami-gyotoku', $xPath->query('//Ship/Shipper/StreetLines/text()')->item(0)->textContent);
//                $this->assertSame('Ichikawa-shi, Chiba', $xPath->query('//Ship/Shipper/City/text()')->item(0)->textContent);
//                $this->assertSame('272-0138', $xPath->query('//Ship/Shipper/PostalCode/text()')->item(0)->textContent);
//                $this->assertSame('JP', $xPath->query('//Ship/Shipper/CountryCode/text()')->item(0)->textContent);
//
//                $this->assertSame('63 RENMIN LU, QINGDAO SHI', $xPath->query('//Ship/Recipient/StreetLines/text()')->item(0)->textContent);
//                $this->assertSame('QINGDAO SHI', $xPath->query('//Ship/Recipient/City/text()')->item(0)->textContent);
//                $this->assertSame('266033', $xPath->query('//Ship/Recipient/PostalCode/text()')->item(0)->textContent);
//                $this->assertSame('CN', $xPath->query('//Ship/Recipient/CountryCode/text()')->item(0)->textContent);
//
//                // Packages
//                $this->assertSame(1, $xPath->query('//Packages')->length);
//                $this->assertSame(2, (int) $xPath->evaluate('count(//RequestedPackages)'));
//
//                $numberAttributes = $xPath->evaluate('//RequestedPackages/@number');
//                $this->assertSame(1, (int) $numberAttributes->item(0)->textContent);
//                $this->assertSame(2, (int) $numberAttributes->item(1)->textContent);
//
//                // First package
//                $this->assertSame(2.5, (float) $xPath->query('//RequestedPackages[1]/Weight/Value/text()')->item(0)->textContent);
//                $this->assertSame(1, (int) $xPath->query('//RequestedPackages[1]/Dimensions/Length/text()')->item(0)->textContent);
//                $this->assertSame(2, (int) $xPath->query('//RequestedPackages[1]/Dimensions/Width/text()')->item(0)->textContent);
//                $this->assertSame(3, (int) $xPath->query('//RequestedPackages[1]/Dimensions/Height/text()')->item(0)->textContent);
//
//                // Second package
//                $this->assertSame(3.5, (float) $xPath->query('//RequestedPackages[2]/Weight/Value/text()')->item(0)->textContent);
//                $this->assertSame(4, (int) $xPath->query('//RequestedPackages[2]/Dimensions/Length/text()')->item(0)->textContent);
//                $this->assertSame(5, (int) $xPath->query('//RequestedPackages[2]/Dimensions/Width/text()')->item(0)->textContent);
//                $this->assertSame(6, (int) $xPath->query('//RequestedPackages[2]/Dimensions/Height/text()')->item(0)->textContent);
//
//                // Billing
//                $this->assertSame(1, $xPath->query('//Billing')->length);
//                $this->assertSame('12345678', $xPath->query('//Billing/ShipperAccountNumber/text()')->item(0)->textContent);
//                $this->assertSame(ShipmentPaymentType::R, $xPath->query('//Billing/ShippingPaymentType/text()')->item(0)->textContent);
//
//                // SpecialServices
//                $this->assertSame(1, $xPath->query('//SpecialServices')->length);
//                $this->assertSame(2, (int) $xPath->evaluate('count(//SpecialServices/Service)'));
//                $this->assertSame('II', $xPath->query('//SpecialServices/Service[1]/ServiceType/text()')->item(0)->textContent);
//                $this->assertSame(24.5, (float) $xPath->query('//SpecialServices/Service[1]/ServiceValue/text()')->item(0)->textContent);
//                $this->assertSame('EUR', $xPath->query('//SpecialServices/Service[1]/CurrencyCode/text()')->item(0)->textContent);
//
//                $this->assertSame('II', $xPath->query('//SpecialServices/Service[2]/ServiceType/text()')->item(0)->textContent);

                return true;
            }))
            ->will(self::returnValue(''));

        $soapClientMock->__soapCall('createShipmentRequest', [ $shipmentRequest ]);
    }
}
