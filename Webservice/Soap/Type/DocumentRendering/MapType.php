<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class MapType
{

    /**
     * @var Entry[] $Entry
     */
    protected $Entry;

    /**
     * @param Entry[] $Entry
     */
    public function __construct(array $Entry)
    {
        $this->Entry = $Entry;
    }

    /**
     * @return Entry[]
     */
    public function getEntry()
    {
        return $this->Entry;
    }

    /**
     * @param Entry[] $Entry
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\MapType
     */
    public function setEntry(array $Entry)
    {
        $this->Entry = $Entry;
        return $this;
    }
}
