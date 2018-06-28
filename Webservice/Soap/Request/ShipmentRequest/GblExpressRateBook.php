<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class GblExpressRateBook extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'docTypeRef_ProcessShipmentRequestType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ProcessShipmentRequestType',
      'docTypeRef_ShipmentDetailType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ShipmentDetailType',
      'docTypeRef_ClientDetailType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ClientDetailType2',
      'docTypeRef_RequestedShipmentType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_RequestedShipmentType',
      'docTypeRef_ShipmentInfoType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ShipmentInfoType',
      'Billing' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\Billing',
      'Services' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\Services',
      'Service' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\Service',
      'docTypeRef_InternationDetailType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_InternationDetailType',
      'docTypeRef_CommoditiesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_CommoditiesType',
      'docTypeRef_OnDemandDeliveryOptions' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_OnDemandDeliveryOptions',
      'docTypeRef_ShipType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ShipType',
      'docTypeRef_ContactInfoType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ContactInfoType',
      'docTypeRef_ContactType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ContactType',
      'docTypeRef_AddressType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_AddressType',
      'docTypeRef_ContactInfoType1' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ContactInfoType1',
      'docTypeRef_ContactType1' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_ContactType1',
      'docTypeRef_AddressType1' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_AddressType1',
      'docTypeRef_PackagesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_PackagesType',
      'docTypeRef_RequestedPackagesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_RequestedPackagesType',
      'docTypeRef_DimensionsType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_DimensionsType',
      'docTypeRef_DangerousGoods' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_DangerousGoods',
      'docTypeRef_Content' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_Content',
      'docTypeRef_NotificationType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_NotificationType2',
      'docTypeRef_PackagesResultsType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_PackagesResultsType',
      'docTypeRef_PackageResultType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_PackageResultType',
      'docTypeRef_LabelImageType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentRequest\\docTypeRef_LabelImageType',
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
        $wsdl = 'https://wsbexpress.dhl.com/sndpt/expressRateBook?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param docTypeRef_ProcessShipmentRequestType $parameters
     * @return docTypeRef_ShipmentDetailType
     */
    public function createShipmentRequest(docTypeRef_ProcessShipmentRequestType $parameters)
    {
      return $this->__soapCall('createShipmentRequest', array($parameters));
    }

}
