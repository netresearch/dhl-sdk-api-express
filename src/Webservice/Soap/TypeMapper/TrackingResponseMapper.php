<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceInterface;
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
            $shipperName = '';
            $originDescription = '';
            $consigneeName = '';
            $destinationDescription = '';
            $shipmentDate = '';
            $estimatedDeliveryDate = '';
            $weight = 0;

            if ($shipmentInfo !== null) {
                $shipperName = $shipmentInfo->getShipperName();
                $originDescription = $shipmentInfo->getOriginServiceArea()->getDescription();
                $consigneeName = $shipmentInfo->getConsigneeName();
                $destinationDescription = $shipmentInfo->getDestinationServiceArea()->getDescription();
                $weight = (float) $shipmentInfo->getWeight() ;
                if ($shipmentInfo->getShipmentDate() instanceof \DateTime) {
                    $shipmentDate = $shipmentInfo->getShipmentDate()->format(DATE_ATOM);
                }
                if ($shipmentInfo->getEstimatedDeliveryDate() instanceof  \DateTime) {
                    $estimatedDeliveryDate = $shipmentInfo->getEstimatedDeliveryDate()->format(DATE_ATOM);
                }
            }

            $shipmentDetails = new TrackingInfo\ShipmentDetails(
                $shipperName,
                $originDescription,
                $consigneeName,
                $destinationDescription,
                $shipmentDate,
                $weight,
                $estimatedDeliveryDate
            );

            $soapTrackingPieces = $soapTrackingItem->getPieces();
            $trackingPieces = [];
            if ($soapTrackingPieces !== null) {
                /** @var PieceInterface[] $trackingPieces */
                $trackingPieces = $soapTrackingPieces->getPieceInfo()->getArrayOfPieceInfoItem();
            }

            if (($shipmentInfo !== null) && ($shipmentInfo->getShipmentEvent() instanceof ShipmentEventCollection)) {
                $shipmentEvents = $this->convertTrackEventItems($shipmentInfo->getShipmentEvent());
            } else {
                $shipmentEvents = [];
            }

            $soapConditions = $soapTrackingItem->getStatus()->getCondition() ?: [];
            $awbConditions = [];
            foreach ($soapConditions as $condition) {
                $awbConditions[$condition->getConditionCode()] = (string) $condition->getConditionData();
            }

            $trackingInfo = new TrackingInfo(
                $soapTrackingItem->getAWBNumber(),
                $soapTrackingItem->getStatus()->getActionStatus(),
                $shipmentDetails,
                $shipmentEvents,
                $trackingPieces,
                $awbConditions
            );

            $trackingInfos[] = $trackingInfo;
        }

        $time = strtotime($soapResponseContent->getResponse()->getServiceHeader()->getMessageTime());
        if (\is_bool($time)) {
            throw new \InvalidArgumentException(
                'Invalid data given. Either pass int.'
            );
        }

        return new TrackingResponse(
            new Message(
                $time,
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
