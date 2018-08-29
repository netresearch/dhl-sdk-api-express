<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Mock\SoapClientTrackingFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBNumberCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\LevelOfDetails;
use Dhl\Express\Webservice\Soap\Type\Tracking\Request;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceHeader;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequestBase;

/**
 * Tests RateRequest
 */
class TrackingRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     */
    public function TrackingRequestXmlMapping()
    {
        $messageTime = '2018-08-07T14:27:02Z';
        $serviceHeader = new ServiceHeader($messageTime, '4894d5593bd9a8259d53f1ef4e81');
        $request = new Request($serviceHeader);

        $trackingRequest = new TrackingRequest($request, LevelOfDetails::__default);
        $trackingRequest->setAWBNumber(new AWBNumberCollection(['XXXXXXXXX']))
            ->setPiecesEnabled('B')
            ->setLevelOfDetails(LevelOfDetails::ALL_CHECK_POINTS);
        $trackingRequestBase = new TrackingRequestBase($trackingRequest);

        $soapRequest = new SoapTrackingRequest();
        $soapRequest->setTrackingRequest($trackingRequestBase);


        /** @var SoapClientFake|MockObject $soapClientMock */
        $soapClientMock = $this->getMockFromWsdl(
            WsdlProvider::getTrackingWsdlFile(),
            SoapClientTrackingFake::class,
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
                'glDHLExpressTrack_providers_services_trackShipment_Binder_trackShipmentRequest'
            )
            ->willReturn('');

        try {
            $soapClientMock->__soapCall(
                'trackShipmentRequest',
                [
                    $soapRequest
                ]
            );
        } catch (\Exception $exception) {
            self::fail($exception->getMessage(), $exception->getCode(), $exception);
        }

        $this->addToAssertionCount(1);

//        $soapClientFactory = new SoapClientFactory();
//        $soapClient = $soapClientFactory->create(
//            'user',
//            'password',
//            'https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL'
//        );
//
//        /** @var SoapTrackingResponse $response */
//        $response = $soapClient->__soapCall('trackShipmentRequest', [$soapRequest]);
//        $trackingResponse =$response->getTrackingResponse()->getTrackingResponse();
//
//        self::assertInstanceOf(AWBInfoCollection::class, $trackingResponse->getAWBInfo());
//        foreach ($trackingResponse->getAWBInfo() as $awbInfo) {
//            self::assertInstanceOf(AWBInfo::class, $awbInfo);
//
//            self::assertInstanceOf(TrackingPieces::class, $awbInfo->getPieces());
//            self::assertInstanceOf(PieceInfoCollection::class, $awbInfo->getPieces()->getPieceInfo());
//
//            foreach ($awbInfo->getPieces()->getPieceInfo() as $pieceInfo) {
//                self::assertInstanceOf(PieceDetails::class, $pieceInfo->getPieceDetails());
//                self::assertInstanceOf(PieceEvent::class, $pieceInfo->getPieceEvent());
//            }
//
//            self::assertInstanceOf(ShipmentInfo::class, $awbInfo->getShipmentInfo());
//            self::assertInstanceOf(ShipmentEventCollection::class, $awbInfo->getShipmentInfo()->getShipmentEvent());
//            foreach ($awbInfo->getShipmentInfo()->getShipmentEvent() as $shipmentEvent) {
//                self::assertInstanceOf(ServiceArea::class, $shipmentEvent->getServiceArea());
//                self::assertInstanceOf(ServiceEvent::class, $shipmentEvent->getServiceEvent());
//            }
//
//            self::assertInstanceOf(Status::class, $awbInfo->getStatus());
//        }
//
//        self::assertNull($trackingResponse->getFault());
//
//        self::assertInstanceOf(ServiceHeader::class, $trackingResponse->getResponse()->getServiceHeader());
    }
}
