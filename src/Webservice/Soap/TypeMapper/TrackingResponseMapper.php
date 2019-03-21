<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentEventInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Model\Response\Tracking\Message;
use Dhl\Express\Model\Response\Tracking\TrackingInfo;
use Dhl\Express\Model\TrackingResponse;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingResponse;
use Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentEventCollection;

/**
 * Tracking Response Mapper.
 *
 * Transform the SOAP response type into tracking objects suitable for further processing.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingResponseMapper
{
    /**
     * @param SoapTrackingResponse $soapTrackingResponse
     * @return TrackingResponseInterface
     */
    public function map(SoapTrackingResponse $soapTrackingResponse)
    {
        $soapResponseContent = $soapTrackingResponse->getTrackingResponse()->getTrackingResponse();

        $trackingInfos = [];

        foreach ($soapResponseContent->getAWBInfo()->getArrayOfAWBInfoItem() as $soapTrackingItem) {
            $shipmentInfo = $soapTrackingItem->getShipmentInfo();
            $shipmentDetails = new TrackingInfo\ShipmentDetails(
                $shipmentInfo ? $shipmentInfo->getShipperName() : '',
                $shipmentInfo->getOriginServiceArea()->getDescription(),
                $shipmentInfo ? $shipmentInfo->getConsigneeName() : '',
                $shipmentInfo->getDestinationServiceArea()->getDescription(),
                $shipmentInfo ? $shipmentInfo->getShipmentDate()->format(DATE_ATOM) : '',
                $shipmentInfo->getWeight() ?: 0,
                $shipmentInfo->getEstimatedDeliveryDate() ? $shipmentInfo->getEstimatedDeliveryDate()->format(
                    DATE_ATOM
                ) : ''
            );
            $trackingPieces = $soapTrackingItem->getPieces();
            $trackingInfos[] = new TrackingInfo(
                (int)$soapTrackingItem->getAWBNumber(),
                $soapTrackingItem->getStatus()->getActionStatus(),
                $shipmentDetails,
                $shipmentInfo ? $this->convertTrackEventItems($shipmentInfo->getShipmentEvent()) : [],
                $trackingPieces ? $trackingPieces
                    ->getPieceInfo()
                    ->getArrayOfPieceInfoItem() : []
            );
        }

        return new TrackingResponse(
            new Message(
                strtotime($soapResponseContent->getResponse()->getServiceHeader()->getMessageTime()),
                $soapResponseContent->getResponse()->getServiceHeader()->getMessageReference()
            ),
            $trackingInfos
        );
    }

    /**
     * @param ShipmentEventCollection $shipmentEvents
     * @return ShipmentEventInterface[]
     */
    private function convertTrackEventItems(ShipmentEventCollection $shipmentEvents)
    {
        $events = [];
        foreach ($shipmentEvents->getArrayOfShipmentEventItem() as $shipmentEvent) {
            $events[] = new TrackingInfo\ShipmentEvent(
                $shipmentEvent->getDate(),
                $shipmentEvent->getTime(),
                $shipmentEvent->getServiceArea()->getDescription(),
                $shipmentEvent->getServiceEvent()->getDescription()
            );
        }

        return $events;
    }
}
