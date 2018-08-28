<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class GLSService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'GLSDocRequest' => GLSDocRequest::class,
        'GLSDocResponse' => GLSDocResponse::class,
        'HdrType' => HdrType::class,
        'Sndr' => Sndr::class,
        'TAddr' => TAddr::class,
        'CommandType' => CommandType::class,
        'FieldType' => FieldType::class,
        'DataType' => DataType::class,
        'FieldListType' => FieldListType::class,
        'MapType' => MapType::class,
        'Entry' => Entry::class,
        'DocumentType' => DocumentType::class,
        'TemplateType' => TemplateType::class,
        'Message' => Message::class,
        'PrintDocumentType' => PrintDocumentType::class,
    ];

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
