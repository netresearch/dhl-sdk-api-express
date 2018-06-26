<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_AddressType2
{

    /**
     * @var StreetLines4 $StreetLines
     */
    protected $StreetLines = null;

    /**
     * @var StreetLines22 $StreetLines2
     */
    protected $StreetLines2 = null;

    /**
     * @var StreetLines32 $StreetLines3
     */
    protected $StreetLines3 = null;

    /**
     * @var StreetName2 $StreetName
     */
    protected $StreetName = null;

    /**
     * @var StreetNumber2 $StreetNumber
     */
    protected $StreetNumber = null;

    /**
     * @var City2 $City
     */
    protected $City = null;

    /**
     * @var string $StateOrProvinceCode
     */
    protected $StateOrProvinceCode = null;

    /**
     * @var PostalCode2 $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var CountryCode $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @param City2 $City
     * @param PostalCode2 $PostalCode
     * @param CountryCode $CountryCode
     */
    public function __construct($City, $PostalCode, $CountryCode)
    {
      $this->City = $City;
      $this->PostalCode = $PostalCode;
      $this->CountryCode = $CountryCode;
    }

    /**
     * @return StreetLines4
     */
    public function getStreetLines()
    {
      return $this->StreetLines;
    }

    /**
     * @param StreetLines4 $StreetLines
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setStreetLines($StreetLines)
    {
      $this->StreetLines = $StreetLines;
      return $this;
    }

    /**
     * @return StreetLines22
     */
    public function getStreetLines2()
    {
      return $this->StreetLines2;
    }

    /**
     * @param StreetLines22 $StreetLines2
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setStreetLines2($StreetLines2)
    {
      $this->StreetLines2 = $StreetLines2;
      return $this;
    }

    /**
     * @return StreetLines32
     */
    public function getStreetLines3()
    {
      return $this->StreetLines3;
    }

    /**
     * @param StreetLines32 $StreetLines3
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setStreetLines3($StreetLines3)
    {
      $this->StreetLines3 = $StreetLines3;
      return $this;
    }

    /**
     * @return StreetName2
     */
    public function getStreetName()
    {
      return $this->StreetName;
    }

    /**
     * @param StreetName2 $StreetName
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setStreetName($StreetName)
    {
      $this->StreetName = $StreetName;
      return $this;
    }

    /**
     * @return StreetNumber2
     */
    public function getStreetNumber()
    {
      return $this->StreetNumber;
    }

    /**
     * @param StreetNumber2 $StreetNumber
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setStreetNumber($StreetNumber)
    {
      $this->StreetNumber = $StreetNumber;
      return $this;
    }

    /**
     * @return City2
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City2 $City
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceCode()
    {
      return $this->StateOrProvinceCode;
    }

    /**
     * @param string $StateOrProvinceCode
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
      $this->StateOrProvinceCode = $StateOrProvinceCode;
      return $this;
    }

    /**
     * @return PostalCode2
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param PostalCode2 $PostalCode
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
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
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_AddressType2
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

}
