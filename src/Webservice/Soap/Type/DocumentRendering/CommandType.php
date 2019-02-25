<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class CommandType
{

    /**
     * @var FieldType[] $Field
     */
    protected $Field;

    /**
     * @param FieldType[] $Field
     */
    public function __construct(array $Field)
    {
        $this->Field = $Field;
    }

    /**
     * @return FieldType[]
     */
    public function getField()
    {
        return $this->Field;
    }

    /**
     * @param FieldType[] $Field
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\CommandType
     */
    public function setField(array $Field)
    {
        $this->Field = $Field;
        return $this;
    }
}
