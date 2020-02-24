<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Webservice\Soap\Type;

/**
 * SOAP Client Class Map.
 *
 * Map SOAP types to PHP classes.
 *
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ClassMap
{
    /**
     * Obtain SOAP types to PHP classes mapping for SOAP responses.
     *
     * @return string[]
     */
    public static function get()
    {
        $classMap =  [
            // getRateRequest response
            'docTypeRef_NotificationType3' => Type\Common\Notification::class,
            'docTypeRef_RateResponseType'  => Type\SoapRateResponse::class,
            'docTypeRef_ProviderType'      => Type\RateResponse\Provider::class,
            'docTypeRef_ServiceType'       => Type\RateResponse\Provider\Service::class,
            'docTypeRef_TotalNetType'      => Type\RateResponse\Provider\Service\TotalNet::class,
            'docTypeRef_ChargesType'       => Type\RateResponse\Provider\Service\Charges::class,
            'docTypeRef_ChargeType'        => Type\RateResponse\Provider\Service\Charges\Charge::class,

            // createShipmentRequest response
            'docTypeRef_NotificationType2'   => Type\Common\Notification::class,
            'docTypeRef_ShipmentDetailType'  => Type\SoapShipmentResponse::class,
            'docTypeRef_PackagesResultsType' => Type\ShipmentResponse\PackagesResults::class,
            'docTypeRef_PackageResultType'   => Type\ShipmentResponse\PackagesResults\PackageResult::class,
            'docTypeRef_LabelImageType'      => Type\ShipmentResponse\LabelImage::class,

            // trackShipmentRequest
            'ServiceHeader' => Type\Tracking\ServiceHeader::class,
            'ResponseServiceHeader' => Type\Tracking\ServiceHeader::class,
            'TrackingResponse' => Type\Tracking\TrackingResponse::class,
            'Response' => Type\Tracking\Response::class,
            'AWBInfo' => Type\Tracking\AWBInfo::class,
            'Status' => Type\Tracking\Status::class,
            'Condition' => Type\Tracking\Condition::class,
            'ArrayOfCondition' => Type\Tracking\ConditionCollection::class,
            'ShipmentInfo' => Type\Tracking\ShipmentInfo::class,
            'OriginServiceArea' => Type\Tracking\OriginServiceArea::class,
            'DestinationServiceArea' => Type\Tracking\DestinationServiceArea::class,
            'ShipmentEvent' => Type\Tracking\ShipmentEvent::class,
            'ServiceEvent' => Type\Tracking\ServiceEvent::class,
            'ServiceArea' => Type\Tracking\ServiceArea::class,
            'ArrayOfShipmentEvent' => Type\Tracking\ShipmentEventCollection::class,
            'Reference' => Type\Tracking\Reference::class,
            'TrackingPieces' => Type\Tracking\TrackingPieces::class,
            'PieceInfo' => Type\Tracking\PieceInfo::class,
            'PieceDetails' => Type\Tracking\PieceDetails::class,
            'PieceEvent' => Type\Tracking\PieceEvent::class,
            'ArrayOfPieceEvent' => Type\Tracking\PieceEventCollection::class,
            'ArrayOfPieceInfo' => Type\Tracking\PieceInfoCollection::class,
            'ArrayOfAWBInfo' => Type\Tracking\AWBInfoCollection::class,
            'Fault' => Type\Tracking\Fault::class,
            'PieceFault' => Type\Tracking\PieceFault::class,
            'ArrayOfPieceFault' => Type\Tracking\PieceFaultCollection::class,
            'trackShipmentRequestResponse' => Type\SoapTrackingResponse::class,
            'pubTrackingResponse' => Type\Tracking\TrackingResponseBase::class,
            'ShipperReference' => Type\Tracking\ShipperReference::class,

            // deleteShipmentRequest response
            'docTypeRef_DeleteResponseType' => Type\SoapShipmentDeleteResponse::class,
            'docTypeRef_NotificationType'   => Type\Common\Notification::class,
        ];

        return $classMap;
    }
}
