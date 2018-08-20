<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class TemplateType
{

    /**
     * @var DataType $Data
     */
    protected $Data = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $TemplateId
     */
    protected $TemplateId = null;

    /**
     * @param string $Type
     * @param string $TemplateId
     */
    public function __construct($Type, $TemplateId)
    {
        $this->Type = $Type;
        $this->TemplateId = $TemplateId;
    }

    /**
     * @return DataType
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param DataType $Data
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\TemplateType
     */
    public function setData($Data)
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\TemplateType
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * @param string $TemplateId
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\TemplateType
     */
    public function setTemplateId($TemplateId)
    {
        $this->TemplateId = $TemplateId;
        return $this;
    }
}
