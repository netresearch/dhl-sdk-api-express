<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_CommoditiesType
{

    /**
     * @var NumberOfPieces $NumberOfPieces
     */
    protected $NumberOfPieces;

    /**
     * @var Description $Description
     */
    protected $Description;

    /**
     * @param Description $Description
     */
    public function __construct($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return NumberOfPieces
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }

    /**
     * @param NumberOfPieces $NumberOfPieces
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_CommoditiesType
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
        $this->NumberOfPieces = $NumberOfPieces;
        return $this;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param Description $Description
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_CommoditiesType
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
