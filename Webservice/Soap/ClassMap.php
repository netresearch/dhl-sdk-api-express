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
     * Obtain SOAP types to PHP classes mapping.
     *
     * @return string[]
     */
    public static function get(): array
    {
        return [
            // Rate Request
            'docTypeRef_RateRequestType' => Soap\Type\RateRequest\docTypeRef_RateRequestType::class,
            'docTypeRef_RateResponseType' => Soap\Type\RateRequest\docTypeRef_RateResponseType::class,
            'docTypeRef_ClientDetailType3' => Soap\Type\RateRequest\docTypeRef_ClientDetailType3::class,
            'docTypeRef_RequestedShipmentType2' => Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2::class,
            'docTypeRef_ShipType2' => Soap\Type\RateRequest\docTypeRef_ShipType2::class,
            'docTypeRef_AddressType2' => Soap\Type\RateRequest\docTypeRef_AddressType2::class,
            'docTypeRef_PackagesType2' => Soap\Type\RateRequest\docTypeRef_PackagesType2::class,
            'docTypeRef_RequestedPackagesType2' => Soap\Type\RateRequest\docTypeRef_RequestedPackagesType2::class,
            'docTypeRef_WeightType' => Soap\Type\RateRequest\docTypeRef_WeightType::class,
            'docTypeRef_DimensionsType2' => Soap\Type\RateRequest\docTypeRef_DimensionsType2::class,
            'Billing2' => Soap\Type\RateRequest\Billing2::class,
            'Services2' => Soap\Type\RateRequest\Services2::class,
            'Service2' => Soap\Type\RateRequest\Service2::class,
            'docTypeRef_ProviderType' => Soap\Type\RateRequest\docTypeRef_ProviderType::class,
            'docTypeRef_NotificationType3' => Soap\Type\RateRequest\docTypeRef_NotificationType3::class,
            'docTypeRef_ServiceType' => Soap\Type\RateRequest\docTypeRef_ServiceType::class,
            'docTypeRef_TotalNetType' => Soap\Type\RateRequest\docTypeRef_TotalNetType::class,
            'docTypeRef_ChargesType' => Soap\Type\RateRequest\docTypeRef_ChargesType::class,
            'docTypeRef_ChargeType' => Soap\Type\RateRequest\docTypeRef_ChargeType::class,
            // Shipment Request
            'docTypeRef_ProcessShipmentRequestType' => Soap\Type\ShipmentRequest\docTypeRef_ProcessShipmentRequestType::class,
            'docTypeRef_ShipmentDetailType' => Soap\Type\ShipmentRequest\docTypeRef_ShipmentDetailType::class,
            'docTypeRef_ClientDetailType2' => Soap\Type\ShipmentRequest\docTypeRef_ClientDetailType2::class,
            'docTypeRef_RequestedShipmentType' => Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType::class,
            'docTypeRef_ShipmentInfoType' => Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType::class,
            'Billing' => Soap\Type\ShipmentRequest\Billing::class,
            'Services' => Soap\Type\ShipmentRequest\Services::class,
            'Service' => Soap\Type\ShipmentRequest\Service::class,
            'docTypeRef_InternationDetailType' => Soap\Type\ShipmentRequest\docTypeRef_InternationDetailType::class,
            'docTypeRef_CommoditiesType' => Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType::class,
            'docTypeRef_OnDemandDeliveryOptions' => Soap\Type\ShipmentRequest\docTypeRef_OnDemandDeliveryOptions::class,
            'docTypeRef_ShipType' => Soap\Type\ShipmentRequest\docTypeRef_ShipType::class,
            'docTypeRef_ContactInfoType' => Soap\Type\ShipmentRequest\docTypeRef_ContactInfoType::class,
            'docTypeRef_ContactType' => Soap\Type\ShipmentRequest\docTypeRef_ContactType::class,
            'docTypeRef_AddressType' => Soap\Type\ShipmentRequest\docTypeRef_AddressType::class,
            'docTypeRef_ContactInfoType1' => Soap\Type\ShipmentRequest\docTypeRef_ContactInfoType1::class,
            'docTypeRef_ContactType1' => Soap\Type\ShipmentRequest\docTypeRef_ContactType1::class,
            'docTypeRef_AddressType1' => Soap\Type\ShipmentRequest\docTypeRef_AddressType1::class,
            'docTypeRef_PackagesType' => Soap\Type\ShipmentRequest\docTypeRef_PackagesType::class,
            'docTypeRef_RequestedPackagesType' => Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType::class,
            'docTypeRef_DimensionsType' => Soap\Type\ShipmentRequest\docTypeRef_DimensionsType::class,
            'docTypeRef_DangerousGoods' => Soap\Type\ShipmentRequest\docTypeRef_DangerousGoods::class,
            'docTypeRef_Content' => Soap\Type\ShipmentRequest\docTypeRef_Content::class,
            'docTypeRef_NotificationType2' => Soap\Type\ShipmentRequest\docTypeRef_NotificationType2::class,
            'docTypeRef_PackagesResultsType' => Soap\Type\ShipmentRequest\docTypeRef_PackagesResultsType::class,
            'docTypeRef_PackageResultType' => Soap\Type\ShipmentRequest\docTypeRef_PackageResultType::class,
            'docTypeRef_LabelImageType' => Soap\Type\ShipmentRequest\docTypeRef_LabelImageType::class,
        ];
    }
}
