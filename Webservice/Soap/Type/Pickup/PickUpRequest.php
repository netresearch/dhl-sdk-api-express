<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class PickUpRequest extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
        'docTypeRef_requestPickUpType' => docTypeRef_requestPickUpType::class,
        'docTypeRef_ClientDetailType2' => docTypeRef_ClientDetailType2::class,
        'docTypeRef_PickUpShipmentType' => docTypeRef_PickUpShipmentType::class,
        'docTypeRef_ShipmentInfoType' => docTypeRef_ShipmentInfoType::class,
        'docTypeRef_InternationDetailType' => docTypeRef_InternationDetailType::class,
        'docTypeRef_CommoditiesType' => docTypeRef_CommoditiesType::class,
        'docTypeRef_PackagesType' => docTypeRef_PackagesType::class,
        'docTypeRef_RequestedPackagesType' => docTypeRef_RequestedPackagesType::class,
        'docTypeRef_ShipType' => docTypeRef_ShipType::class,
        'docTypeRef_ContactInfoType' => docTypeRef_ContactInfoType::class,
        'docTypeRef_ContactType' => docTypeRef_ContactType::class,
        'docTypeRef_AddressType' => docTypeRef_AddressType::class,
        'docTypeRef_DimensionsType' => docTypeRef_DimensionsType::class,
        'Billing' => Billing::class,
        'docTypeRef_ShipmentDetailType' => docTypeRef_ShipmentDetailType::class,
        'docTypeRef_NotificationType2' => docTypeRef_NotificationType2::class,
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array (
        'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'https://wsbexpress.dhl.com/sndpt/requestPickup?WSDL';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param docTypeRef_requestPickUpType $parameters
     * @return docTypeRef_ShipmentDetailType
     */
    public function PickUpRequest(docTypeRef_requestPickUpType $parameters)
    {
        return $this->__soapCall('PickUpRequest', array($parameters));
    }
}
