<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap\Request;

use Dhl\Express\Test\Unit\Webservice\Soap\TestSoapClient;
use Dhl\Express\Webservice\Soap\AuthHeaderFactory;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\Packages;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\ContactInfo;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\LabelType;

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
        $shipmentInfo = new ShipmentInfo(
            DropOffType::REQUEST_COURIER,
            'U',
            'EUR',
            UnitOfMeasurement::SI
        );

        $shipmentInfo->setAccount('XXXXXXXXX')
            ->setPackagesCount(1)
            ->setLabelType(LabelType::PDF)
            ->setLabelTemplate('ECOM26_84_001');

        $internationalDetail = new InternationalDetail(
            (new Commodities('ppps sd'))
                ->setNumberOfPieces(1)
                ->setCountryOfManufacture('CZ')
                ->setQuantity(1)
                ->setUnitPrice(10)
                ->setCustomsValue(1)
        );

        $internationalDetail->setContent(Content::NON_DOCUMENTS);

        $ship = new Ship(
            // Shipper
            new ContactInfo(
                (new Contact('John Smith', 'DHL', '003932423423'))
                    ->setEmailAddress('John.Smith@dhl.com'),
                new Address('V Parku 2308/10', 'Prague', '14800', 'CZ')
            ),
            // Recipient
            new ContactInfo(
                (new Contact('Jane Smith', 'Deutsche Post DHL', '004922832432423'))
                    ->setEmailAddress('ane.Smith@dhl.de'),
                new Address('Via Felice Matteucci 2', 'Firenze', '50127', 'IT')
            )
        );

        $packages = new Packages([
            (new RequestedPackages(9.0, new Dimensions(46, 34, 31), 'TEST CZ-IT', 1))
                ->setInsuredValue(10),
        ]);

        $shipTimestamp = (new \DateTime())
            ->setTime(10, 0)
            ->modify('+6 hours');

        $requestedShipment = new RequestedShipment(
            $shipmentInfo,
            $shipTimestamp,
            'DDP',
            $internationalDetail,
            $ship,
            $packages
        );

        $requestedShipment->setPickupLocation('west wing 3rd Floor')
            ->setPickupLocationCloseTime('16:12')
            ->setSpecialPickupInstruction('fragile items');

        $shipmentRequest = new ShipmentRequest($requestedShipment);

//var_dump($shipmentRequest);
//exit;

        /** @var \SoapClient $soapClientMock */
        $soapClientMock = $this->getMockFromWsdl(
            __DIR__ . '/../Wsdl/expressRateBook.wsdl',
            TestSoapClient::class,
            '',
            [
                '__doRequest',
            ]
        );

ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('xdebug.var_display_max_depth', -1);

        $soapClientMock->expects(self::any())
            ->method('__doRequest')
            ->with(self::callback(function ($requestXml) use ($shipTimestamp) {

var_dump($requestXml);
exit;

//                self::assertInternalType('string', $requestXml);
//
//                $document = new \DOMDocument();
//                $document->loadXML($requestXml);
//
//                $xPath = new \DOMXPath($document);
//
//                $this->assertSame(1, (int) $xPath->evaluate('count(//ns1:ShipmentRequest)'));
//

                return true;
            }))
            ->will(self::returnValue(''));

        $soapClientMock->__soapCall('createShipmentRequest', [ $shipmentRequest ]);
    }
}
