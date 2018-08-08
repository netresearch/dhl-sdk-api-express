<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingRequest;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingResponse;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfo;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfoCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBNumberCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\ConditionCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\LevelOfDetails;
use Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails;
use Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent;
use Dhl\Express\Webservice\Soap\Type\Tracking\PieceInfoCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\Reference;
use Dhl\Express\Webservice\Soap\Type\Tracking\Request;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceArea;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceEvent;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceHeader;
use Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentEventCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo;
use Dhl\Express\Webservice\Soap\Type\Tracking\Status;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingPieces;
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
    public function TrackingRequestXmlMapping(): void
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

        $soapClientFactory = new SoapClientFactory();
        $soapClient = $soapClientFactory->create(
            'user',
            'password',
            'https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL'
        );

        /** @var SoapTrackingResponse $response */
        $response = $soapClient->__soapCall('trackShipmentRequest', [$soapRequest]);
        $trackingResponse =$response->getTrackingResponse()->getTrackingResponse();

        $this->assertInstanceOf(AWBInfoCollection::class, $trackingResponse->getAWBInfo());
        foreach ($trackingResponse->getAWBInfo() as $awbInfo) {
            $this->assertInstanceOf(AWBInfo::class, $awbInfo);

            $this->assertInstanceOf(TrackingPieces::class, $awbInfo->getPieces());
            $this->assertInstanceOf(PieceInfoCollection::class, $awbInfo->getPieces()->getPieceInfo());

            foreach ($awbInfo->getPieces()->getPieceInfo() as $pieceInfo) {
                $this->assertInstanceOf(PieceDetails::class, $pieceInfo->getPieceDetails());
                $this->assertInstanceOf(PieceEvent::class, $pieceInfo->getPieceEvent());
            }

            $this->assertInstanceOf(ShipmentInfo::class, $awbInfo->getShipmentInfo());
            $this->assertInstanceOf(ShipmentEventCollection::class, $awbInfo->getShipmentInfo()->getShipmentEvent());
            foreach ($awbInfo->getShipmentInfo()->getShipmentEvent() as $shipmentEvent) {
                $this->assertInstanceOf(ServiceArea::class, $shipmentEvent->getServiceArea());
                $this->assertInstanceOf(ServiceEvent::class, $shipmentEvent->getServiceEvent());
            }

            $this->assertInstanceOf(Status::class, $awbInfo->getStatus());
        }

        $this->assertNull($trackingResponse->getFault());

        $this->assertInstanceOf(ServiceHeader::class , $trackingResponse->getResponse()->getServiceHeader());
    }
}
