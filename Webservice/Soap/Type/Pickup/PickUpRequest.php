<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class PickUpRequest extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'docTypeRef_requestPickUpType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_requestPickUpType',
      'docTypeRef_ClientDetailType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_ClientDetailType2',
      'docTypeRef_PickUpShipmentType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_PickUpShipmentType',
      'docTypeRef_ShipmentInfoType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_ShipmentInfoType',
      'docTypeRef_InternationDetailType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_InternationDetailType',
      'docTypeRef_CommoditiesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_CommoditiesType',
      'docTypeRef_PackagesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_PackagesType',
      'docTypeRef_RequestedPackagesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_RequestedPackagesType',
      'docTypeRef_ShipType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_ShipType',
      'docTypeRef_ContactInfoType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_ContactInfoType',
      'docTypeRef_ContactType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_ContactType',
      'docTypeRef_AddressType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_AddressType',
      'docTypeRef_DimensionsType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_DimensionsType',
      'Billing' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\Billing',
      'docTypeRef_ShipmentDetailType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_ShipmentDetailType',
      'docTypeRef_NotificationType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\Pickup\\docTypeRef_NotificationType2',
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
