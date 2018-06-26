<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_RequestedPackagesType2
{

    /**
     * @var docTypeRef_WeightType $Weight
     */
    protected $Weight = null;

    /**
     * @var docTypeRef_DimensionsType2 $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var _x0040_number3 $number
     */
    protected $number = null;

    /**
     * @param docTypeRef_WeightType $Weight
     * @param docTypeRef_DimensionsType2 $Dimensions
     * @param _x0040_number3 $number
     */
    public function __construct($Weight, $Dimensions, $number)
    {
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->number = $number;
    }

    /**
     * @return docTypeRef_WeightType
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param docTypeRef_WeightType $Weight
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedPackagesType2
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return docTypeRef_DimensionsType2
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param docTypeRef_DimensionsType2 $Dimensions
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedPackagesType2
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return _x0040_number3
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param _x0040_number3 $number
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedPackagesType2
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
