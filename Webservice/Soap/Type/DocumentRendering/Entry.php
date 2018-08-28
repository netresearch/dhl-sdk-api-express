<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class Entry
{

    /**
     * @var string $Key
     */
    protected $Key;

    /**
     * @var string $Value
     */
    protected $Value;

    /**
     * @param string $Key
     * @param string $Value
     */
    public function __construct($Key, $Value)
    {
        $this->Key = $Key;
        $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param string $Key
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Entry
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Entry
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }
}
