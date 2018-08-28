<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_InternationDetailType
{

    /**
     * @var docTypeRef_CommoditiesType $Commodities
     */
    protected $Commodities;

    /**
     * @param docTypeRef_CommoditiesType $Commodities
     */
    public function __construct($Commodities)
    {
        $this->Commodities = $Commodities;
    }

    /**
     * @return docTypeRef_CommoditiesType
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }

    /**
     * @param docTypeRef_CommoditiesType $Commodities
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_InternationDetailType
     */
    public function setCommodities($Commodities)
    {
        $this->Commodities = $Commodities;
        return $this;
    }
}
