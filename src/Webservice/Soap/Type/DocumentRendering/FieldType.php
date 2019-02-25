<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class FieldType
{

    /**
     * @var string $Name
     */
    protected $Name;

    /**
     * @var string $Value
     */
    protected $Value;

    /**
     * @param string $Name
     * @param string $Value
     */
    public function __construct($Name, $Value)
    {
        $this->Name = $Name;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldType
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldType
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }
}
