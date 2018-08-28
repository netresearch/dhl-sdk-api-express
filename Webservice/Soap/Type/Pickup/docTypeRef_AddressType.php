<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_AddressType
{

    /**
     * @var StreetLines $StreetLines
     */
    protected $StreetLines;

    /**
     * @var StreetName $StreetName
     */
    protected $StreetName;

    /**
     * @var StreetNumber $StreetNumber
     */
    protected $StreetNumber;

    /**
     * @var StreetLines2 $StreetLines2
     */
    protected $StreetLines2;

    /**
     * @var StreetLines3 $StreetLines3
     */
    protected $StreetLines3;

    /**
     * @var City $City
     */
    protected $City;

    /**
     * @var StateOrProvinceCode $StateOrProvinceCode
     */
    protected $StateOrProvinceCode;

    /**
     * @var PostalCode $PostalCode
     */
    protected $PostalCode;

    /**
     * @var CountryCode $CountryCode
     */
    protected $CountryCode;

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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
     */
    public function setStreetName($StreetName)
    {
        $this->StreetName = $StreetName;
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
     */
    public function setStreetLines3($StreetLines3)
    {
        $this->StreetLines3 = $StreetLines3;
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_AddressType
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }
}
