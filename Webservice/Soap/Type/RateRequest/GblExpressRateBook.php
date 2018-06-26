<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class GblExpressRateBook extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'docTypeRef_RateRequestType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_RateRequestType',
      'docTypeRef_RateResponseType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_RateResponseType',
      'docTypeRef_ClientDetailType3' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_ClientDetailType3',
      'docTypeRef_RequestedShipmentType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_RequestedShipmentType2',
      'docTypeRef_ShipType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_ShipType2',
      'docTypeRef_AddressType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_AddressType2',
      'docTypeRef_PackagesType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_PackagesType2',
      'docTypeRef_RequestedPackagesType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_RequestedPackagesType2',
      'docTypeRef_WeightType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_WeightType',
      'docTypeRef_DimensionsType2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_DimensionsType2',
      'Billing2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\Billing2',
      'Services2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\Services2',
      'Service2' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\Service2',
      'docTypeRef_ProviderType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_ProviderType',
      'docTypeRef_NotificationType3' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_NotificationType3',
      'docTypeRef_ServiceType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_ServiceType',
      'docTypeRef_TotalNetType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_TotalNetType',
      'docTypeRef_ChargesType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_ChargesType',
      'docTypeRef_ChargeType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\RateRequest\\docTypeRef_ChargeType',
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
     * @param docTypeRef_RateRequestType $parameters
     * @return docTypeRef_RateResponseType
     */
    public function getRateRequest(docTypeRef_RateRequestType $parameters)
    {
      return $this->__soapCall('getRateRequest', array($parameters));
    }

}
