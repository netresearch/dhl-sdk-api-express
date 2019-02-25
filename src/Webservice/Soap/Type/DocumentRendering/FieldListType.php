<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class FieldListType
{

    /**
     * @var MapType[] $Map
     */
    protected $Map;

    /**
     * @var string $Name
     */
    protected $Name;

    /**
     * @param MapType[] $Map
     * @param string $Name
     */
    public function __construct(array $Map, $Name)
    {
        $this->Map = $Map;
        $this->Name = $Name;
    }

    /**
     * @return MapType[]
     */
    public function getMap()
    {
        return $this->Map;
    }

    /**
     * @param MapType[] $Map
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldListType
     */
    public function setMap(array $Map)
    {
        $this->Map = $Map;
        return $this;
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldListType
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }
}
