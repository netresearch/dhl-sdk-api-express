<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Model\Response\Tracking\Message;
use Dhl\Express\Model\Response\Tracking\TrackingInfo;
use Dhl\Express\Model\TrackingResponse;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingResponse;

/**
 * Tracking Response Mapper.
 *
 * Transform the SOAP response type into tracking objects suitable for further processing.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingResponseMapper
{
    /**
     * @param SoapTrackingResponse $soapTrackingResponse
     * @return TrackingResponseInterface
     */
    public function map(SoapTrackingResponse $soapTrackingResponse): TrackingResponseInterface
    {
        $soapResponseContent = $soapTrackingResponse->getTrackingResponse()->getTrackingResponse();

        $tackingInfos = [];

        foreach ($soapResponseContent->getAWBInfo()->getArrayOfAWBInfoItem() as $soapTrackingItem) {
            $tackingInfos[] =  new TrackingInfo(
                (int) $soapTrackingItem->getAWBNumber(),
               $soapTrackingItem->getStatus()->getActionStatus(),
               new TrackingInfo\ShipmentDetails(
                   $soapTrackingItem->getShipmentInfo()->getShipperName(),
                   $soapTrackingItem->getShipmentInfo()->getConsigneeName(),
                   $soapTrackingItem->getShipmentInfo()->getShipmentDate()->getTimestamp()
               ),
               $soapTrackingItem->getShipmentInfo()->getShipmentEvent()->getArrayOfShipmentEventItem(),
               $soapTrackingItem->getPieces()->getPieceInfo()->getArrayOfPieceInfoItem()
           );
        }

        return new TrackingResponse(
            new Message(
                strtotime($soapResponseContent->getResponse()->getServiceHeader()->getMessageTime()),
                $soapResponseContent->getResponse()->getServiceHeader()->getMessageReference()
            ),
            $tackingInfos
        );
    }
}
