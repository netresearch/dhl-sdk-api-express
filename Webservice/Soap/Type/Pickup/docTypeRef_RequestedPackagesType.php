<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_RequestedPackagesType
{

    /**
     * @var Weight $Weight
     */
    protected $Weight;

    /**
     * @var docTypeRef_DimensionsType $Dimensions
     */
    protected $Dimensions;

    /**
     * @var CustomerReferences $CustomerReferences
     */
    protected $CustomerReferences;

    /**
     * @var _x0040_number $number
     */
    protected $number;

    /**
     * @param Weight $Weight
     * @param docTypeRef_DimensionsType $Dimensions
     * @param CustomerReferences $CustomerReferences
     * @param _x0040_number $number
     */
    public function __construct($Weight, $Dimensions, $CustomerReferences, $number)
    {
        $this->Weight = $Weight;
        $this->Dimensions = $Dimensions;
        $this->CustomerReferences = $CustomerReferences;
        $this->number = $number;
    }

    /**
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param Weight $Weight
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_RequestedPackagesType
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }

    /**
     * @return docTypeRef_DimensionsType
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * @param docTypeRef_DimensionsType $Dimensions
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_RequestedPackagesType
     */
    public function setDimensions($Dimensions)
    {
        $this->Dimensions = $Dimensions;
        return $this;
    }

    /**
     * @return CustomerReferences
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }

    /**
     * @param CustomerReferences $CustomerReferences
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_RequestedPackagesType
     */
    public function setCustomerReferences($CustomerReferences)
    {
        $this->CustomerReferences = $CustomerReferences;
        return $this;
    }

    /**
     * @return _x0040_number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param _x0040_number $number
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_RequestedPackagesType
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
