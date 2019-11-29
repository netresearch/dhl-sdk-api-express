<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\ContactInfo;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;
use Dhl\Express\Webservice\Soap\Type\SoapShipmentRequest;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests SoapShipmentRequest
 */
class ShipmentRequestTest extends TestCase
{
    /**
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     */
    public function testCreateShipmentRequestXmlMapping()
    {
        $shipmentInfo = new ShipmentInfo(
            DropOffType::REGULAR_PICKUP,
            'P',
            'SGD',
            UnitOfMeasurement::SI
        );

        $shipmentInfo->setAccount('XXXXXXXXX');

        $internationalDetail = new InternationalDetail(
            (new Commodities('Customer Reference 1'))
                ->setNumberOfPieces(1)
                ->setCountryOfManufacture('CN')
                ->setQuantity(1)
                ->setUnitPrice(5)
                ->setCustomsValue(10)
        );

        $internationalDetail->setContent(Content::NON_DOCUMENTS);

        $ship = new Ship(
            // Shipper
            new ContactInfo(
                (new Contact('Tester 1', 'DHL', '2175441239'))
                    ->setEmailAddress('jb@acme.com'),
                new Address('#05-33 Singapore Post Centre', 'Singapore', '408600', 'SG')
            ),
            // Recipient
            new ContactInfo(
                (new Contact('Tester 2', 'Acme Inc', '88347346643'))
                    ->setEmailAddress('jackie.chan@eei.com'),
                (new Address('500 Hunt Valley Road', 'New Kensington PA', '15068', 'US'))
                    ->setStateOrProvinceCode('PA')
            )
        );

        $packages = new Packages([
            new RequestedPackages(2.0, new Dimensions(1, 2, 3), 'Piece 1', 1)
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

        $shipmentRequest = new SoapShipmentRequest($requestedShipment);

        /** @var SoapClientFake|MockObject|\PHPUnit_Framework_MockObject_MockObject $soapClientMock */
        $soapClientMock = $this->getMockFromWsdl(
            WsdlProvider::getWsdlFile(),
            SoapClientFake::class,
            '',
            [
                '__doRequest',
            ]
        );

        $soapClientMock->expects(self::once())
            ->method('__doRequest')
            ->with(
                self::anything(),
                self::anything(),
                'euExpressRateBook_providerServices_ShipmentHandlingServices_Binder_createShipmentRequest'
            )
            ->willReturn('');

        try {
            $soapClientMock->__soapCall(
                'createShipmentRequest',
                [
                    $shipmentRequest
                ]
            );
        } catch (\Exception $exception) {
            self::fail($exception->getMessage());
        }

        $this->addToAssertionCount(1);
    }
}
