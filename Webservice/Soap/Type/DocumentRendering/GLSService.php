<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class GLSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GLSDocRequest' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\GLSDocRequest',
      'GLSDocResponse' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\GLSDocResponse',
      'HdrType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\HdrType',
      'Sndr' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\Sndr',
      'TAddr' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\TAddr',
      'CommandType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\CommandType',
      'FieldType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\FieldType',
      'DataType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\DataType',
      'FieldListType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\FieldListType',
      'MapType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\MapType',
      'Entry' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\Entry',
      'DocumentType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\DocumentType',
      'TemplateType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\TemplateType',
      'Message' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\Message',
      'PrintDocumentType' => 'Dhl\\Express\\Webservice\\Soap\\Type\\DocumentRendering\\PrintDocumentType',
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
        $wsdl = 'https://wsbexpress.dhl.com/gbl/DocumentRendering?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GLSDocRequest $GLSDocRequest
     * @return GLSDocResponse
     */
    public function GLSDoc(GLSDocRequest $GLSDocRequest)
    {
      return $this->__soapCall('GLSDoc', array($GLSDocRequest));
    }

}
