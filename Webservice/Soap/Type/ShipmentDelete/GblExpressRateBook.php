<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentDelete;

class GblExpressRateBook extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'docTypeRef_DeleteRequestType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentDelete\\docTypeRef_DeleteRequestType',
      'docTypeRef_DeleteResponseType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentDelete\\docTypeRef_DeleteResponseType',
      'docTypeRef_ClientDetailType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentDelete\\docTypeRef_ClientDetailType',
      'docTypeRef_NotificationType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\ShipmentDelete\\docTypeRef_NotificationType',
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
     * @param docTypeRef_DeleteRequestType $parameters
     * @return docTypeRef_DeleteResponseType
     */
    public function deleteShipmentRequest(docTypeRef_DeleteRequestType $parameters)
    {
      return $this->__soapCall('deleteShipmentRequest', array($parameters));
    }

}
