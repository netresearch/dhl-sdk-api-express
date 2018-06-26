<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_AddressType1
{

    /**
     * @var StreetLines $StreetLines
     */
    protected $StreetLines = null;

    /**
     * @var StreetName $StreetName
     */
    protected $StreetName = null;

    /**
     * @var BuildingName $BuildingName
     */
    protected $BuildingName = null;

    /**
     * @var StreetNumber $StreetNumber
     */
    protected $StreetNumber = null;

    /**
     * @var StreetLines2 $StreetLines2
     */
    protected $StreetLines2 = null;

    /**
     * @var StreetLines3 $StreetLines3
     */
    protected $StreetLines3 = null;

    /**
     * @var CityDistrict $CityDistrict
     */
    protected $CityDistrict = null;

    /**
     * @var City $City
     */
    protected $City = null;

    /**
     * @var StateOrProvinceCode $StateOrProvinceCode
     */
    protected $StateOrProvinceCode = null;

    /**
     * @var PostalCode $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var CountryName $CountryName
     */
    protected $CountryName = null;

    /**
     * @var CountryCode $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param StreetLines $StreetLines
     * @param City $City
     * @param PostalCode $PostalCode
     * @param CountryCode $CountryCode
     */
    public function __construct($StreetLines, $City, $PostalCode, $CountryCode)
    {
      $this->StreetLines = $StreetLines;
      $this->City = $City;
      $this->PostalCode = $PostalCode;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return StreetLines
     */
    public function getStreetLines()
    {
      return $this->StreetLines;
    }

    /**
     * @param StreetLines $StreetLines
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setStreetLines($StreetLines)
    {
      $this->StreetLines = $StreetLines;
      return $this;
    }

    /**
     * @return StreetName
     */
    public function getStreetName()
    {
      return $this->StreetName;
    }

    /**
     * @param StreetName $StreetName
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setStreetName($StreetName)
    {
      $this->StreetName = $StreetName;
      return $this;
    }

    /**
     * @return BuildingName
     */
    public function getBuildingName()
    {
      return $this->BuildingName;
    }

    /**
     * @param BuildingName $BuildingName
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setBuildingName($BuildingName)
    {
      $this->BuildingName = $BuildingName;
      return $this;
    }

    /**
     * @return StreetNumber
     */
    public function getStreetNumber()
    {
      return $this->StreetNumber;
    }

    /**
     * @param StreetNumber $StreetNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setStreetNumber($StreetNumber)
    {
      $this->StreetNumber = $StreetNumber;
      return $this;
    }

    /**
     * @return StreetLines2
     */
    public function getStreetLines2()
    {
      return $this->StreetLines2;
    }

    /**
     * @param StreetLines2 $StreetLines2
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setStreetLines2($StreetLines2)
    {
      $this->StreetLines2 = $StreetLines2;
      return $this;
    }

    /**
     * @return StreetLines3
     */
    public function getStreetLines3()
    {
      return $this->StreetLines3;
    }

    /**
     * @param StreetLines3 $StreetLines3
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setStreetLines3($StreetLines3)
    {
      $this->StreetLines3 = $StreetLines3;
      return $this;
    }

    /**
     * @return CityDistrict
     */
    public function getCityDistrict()
    {
      return $this->CityDistrict;
    }

    /**
     * @param CityDistrict $CityDistrict
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setCityDistrict($CityDistrict)
    {
      $this->CityDistrict = $CityDistrict;
      return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City $City
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return StateOrProvinceCode
     */
    public function getStateOrProvinceCode()
    {
      return $this->StateOrProvinceCode;
    }

    /**
     * @param StateOrProvinceCode $StateOrProvinceCode
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
      $this->StateOrProvinceCode = $StateOrProvinceCode;
      return $this;
    }

    /**
     * @return PostalCode
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param PostalCode $PostalCode
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return CountryName
     */
    public function getCountryName()
    {
      return $this->CountryName;
    }

    /**
     * @param CountryName $CountryName
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setCountryName($CountryName)
    {
      $this->CountryName = $CountryName;
      return $this;
    }

    /**
     * @return CountryCode
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param CountryCode $CountryCode
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_AddressType1
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
