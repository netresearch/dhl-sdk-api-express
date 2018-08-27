<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class CommandType
{

    /**
     * @var FieldType[] $Field
     */
    protected $Field = null;

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
    public function getField(): array
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
