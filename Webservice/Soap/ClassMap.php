<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

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
            'docTypeRef_RateRequestType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RateRequestType::class,
            'docTypeRef_RateResponseType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RateResponseType::class,
            'docTypeRef_ClientDetailType3' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ClientDetailType3::class,
            'docTypeRef_RequestedShipmentType2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2::class,
            'docTypeRef_ShipType2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ShipType2::class,
            'docTypeRef_AddressType2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2::class,
            'docTypeRef_PackagesType2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_PackagesType2::class,
            'docTypeRef_RequestedPackagesType2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedPackagesType2::class,
            'docTypeRef_WeightType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_WeightType::class,
            'docTypeRef_DimensionsType2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_DimensionsType2::class,
            'Billing2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\Billing2::class,
            'Services2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\Services2::class,
            'Service2' => \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2::class,
            'docTypeRef_ProviderType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ProviderType::class,
            'docTypeRef_NotificationType3' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_NotificationType3::class,
            'docTypeRef_ServiceType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType::class,
            'docTypeRef_TotalNetType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_TotalNetType::class,
            'docTypeRef_ChargesType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargesType::class,
            'docTypeRef_ChargeType' => \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargeType::class,
            // Shipment Request
            'docTypeRef_ProcessShipmentRequestType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ProcessShipmentRequestType::class,
            'docTypeRef_ShipmentDetailType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentDetailType::class,
            'docTypeRef_ClientDetailType2' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ClientDetailType2::class,
            'docTypeRef_RequestedShipmentType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType::class,
            'docTypeRef_ShipmentInfoType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType::class,
            'Billing' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Billing::class,
            'Services' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Services::class,
            'Service' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service::class,
            'docTypeRef_InternationDetailType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_InternationDetailType::class,
            'docTypeRef_CommoditiesType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType::class,
            'docTypeRef_OnDemandDeliveryOptions' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_OnDemandDeliveryOptions::class,
            'docTypeRef_ShipType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType::class,
            'docTypeRef_ContactInfoType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactInfoType::class,
            'docTypeRef_ContactType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType::class,
            'docTypeRef_AddressType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType::class,
            'docTypeRef_ContactInfoType1' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactInfoType1::class,
            'docTypeRef_ContactType1' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType1::class,
            'docTypeRef_AddressType1' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1::class,
            'docTypeRef_PackagesType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_PackagesType::class,
            'docTypeRef_RequestedPackagesType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType::class,
            'docTypeRef_DimensionsType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_DimensionsType::class,
            'docTypeRef_DangerousGoods' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_DangerousGoods::class,
            'docTypeRef_Content' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_Content::class,
            'docTypeRef_NotificationType2' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_NotificationType2::class,
            'docTypeRef_PackagesResultsType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_PackagesResultsType::class,
            'docTypeRef_PackageResultType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_PackageResultType::class,
            'docTypeRef_LabelImageType' => \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_LabelImageType::class,
        ];
    }
}
