<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Webservice\Soap;

/**
 * SOAP Client Class Map.
 *
 * Map SOAP types to PHP classes.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ClassMap
{
    /**
     * Obtain SOAP types to PHP classes mapping for SOAP responses.
     *
     * @return array|string[]
     */
    public static function get(): array
    {
        return [
            // getRateRequest response
            'docTypeRef_RateResponseType'  => Soap\Response\RateResponse::class,
            'docTypeRef_ProviderType'      => Soap\Response\RateResponse\Provider::class,
            'docTypeRef_NotificationType3' => Soap\Response\RateResponse\Notification::class,
            'docTypeRef_ServiceType'       => Soap\Response\RateResponse\Service::class,
            'docTypeRef_TotalNetType'      => Soap\Response\RateResponse\TotalNet::class,
            'docTypeRef_ChargesType'       => Soap\Response\RateResponse\Charges::class,
            'docTypeRef_ChargeType'        => Soap\Response\RateResponse\Charge::class,


//            'docTypeRef_RateResponseType' => Soap\Type\RateRequest\RateResponseType::class,
//            'docTypeRef_ClientDetailType3' => Soap\Type\RateRequest\ClientDetail::class,
//            'docTypeRef_RequestedShipmentType2' => Soap\Type\RateRequest\RequestedShipment::class,
//            'docTypeRef_ShipType2' => Soap\Type\RateRequest\Ship::class,
//            'docTypeRef_AddressType2' => Soap\Type\RateRequest\Address::class,
//            'docTypeRef_PackagesType2' => Soap\Type\RateRequest\Packages::class,
//            'docTypeRef_RequestedPackagesType2' => Soap\Type\RateRequest\RequestedPackages::class,
//            'docTypeRef_WeightType' => Soap\Type\RateRequest\Weight::class,
//            'docTypeRef_DimensionsType2' => Soap\Type\RateRequest\Dimensions::class,
//            'Billing2' => Soap\Type\RateRequest\Billing::class,
//            'Services2' => Soap\Type\RateRequest\Services::class,
//            'Service2' => Soap\Type\RateRequest\Service::class,

            //            'docTypeRef_NotificationType3' => Soap\Type\RateRequest\NotificationType3::class,
//            'docTypeRef_ServiceType' => Soap\Type\RateRequest\ServiceType::class,
//            'docTypeRef_TotalNetType' => Soap\Type\RateRequest\TotalNetType::class,
//            'docTypeRef_ChargesType' => Soap\Type\RateRequest\ChargesType::class,
//            'docTypeRef_ChargeType' => Soap\Type\RateRequest\ChargeType::class,
//            // Shipment Request
//            'docTypeRef_ProcessShipmentRequestType' => Soap\Type\ShipmentRequest\ProcessShipmentRequestType::class,
//            'docTypeRef_ShipmentDetailType' => Soap\Type\ShipmentRequest\ShipmentDetailType::class,
//            'docTypeRef_ClientDetailType2' => Soap\Type\ShipmentRequest\ClientDetailType2::class,
//            'docTypeRef_RequestedShipmentType' => Soap\Type\ShipmentRequest\RequestedShipmentType::class,
//            'docTypeRef_ShipmentInfoType' => Soap\Type\ShipmentRequest\ShipmentInfoType::class,
//            'Billing' => Soap\Type\ShipmentRequest\Billing::class,
//            'Services' => Soap\Type\ShipmentRequest\Services::class,
//            'Service' => Soap\Type\ShipmentRequest\Service::class,
//            'docTypeRef_InternationDetailType' => Soap\Type\ShipmentRequest\InternationDetailType::class,
//            'docTypeRef_CommoditiesType' => Soap\Type\ShipmentRequest\CommoditiesType::class,
//            'docTypeRef_OnDemandDeliveryOptions' => Soap\Type\ShipmentRequest\OnDemandDeliveryOptions::class,
//            'docTypeRef_ShipType' => Soap\Type\ShipmentRequest\ShipType::class,
//            'docTypeRef_ContactInfoType' => Soap\Type\ShipmentRequest\ContactInfoType::class,
//            'docTypeRef_ContactType' => Soap\Type\ShipmentRequest\ContactType::class,
//            'docTypeRef_AddressType' => Soap\Type\ShipmentRequest\AddressType::class,
//            'docTypeRef_ContactInfoType1' => Soap\Type\ShipmentRequest\ContactInfoType1::class,
//            'docTypeRef_ContactType1' => Soap\Type\ShipmentRequest\ContactType1::class,
//            'docTypeRef_AddressType1' => Soap\Type\ShipmentRequest\AddressType1::class,
//            'docTypeRef_PackagesType' => Soap\Type\ShipmentRequest\PackagesType::class,
//            'docTypeRef_RequestedPackagesType' => Soap\Type\ShipmentRequest\RequestedPackagesType::class,
//            'docTypeRef_DimensionsType' => Soap\Type\ShipmentRequest\DimensionsType::class,
//            'docTypeRef_DangerousGoods' => Soap\Type\ShipmentRequest\DangerousGoods::class,
//            'docTypeRef_Content' => Soap\Type\ShipmentRequest\Content::class,
//            'docTypeRef_NotificationType2' => Soap\Type\ShipmentRequest\NotificationType2::class,
//            'docTypeRef_PackagesResultsType' => Soap\Type\ShipmentRequest\PackagesResultsType::class,
//            'docTypeRef_PackageResultType' => Soap\Type\ShipmentRequest\PackageResultType::class,
//            'docTypeRef_LabelImageType' => Soap\Type\ShipmentRequest\LabelImageType::class,
        ];
    }
}
