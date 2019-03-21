<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * AddressType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class AddressType
{
    /**
     * @var string
     */
    protected $StreetLines;

    /**
     * @var string
     */
    protected $StreetName;

    /**
     * @var string
     */
    protected $StreetNumber;

    /**
     * @var string
     */
    protected $StreetLines2;

    /**
     * @var string
     */
    protected $StreetLines3;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $StateOrProvinceCode;

    /**
     * @var string
     */
    protected $PostalCode;

    /**
     * @var string
     */
    protected $CountryCode;

    /**
     * @param string $StreetLines
     * @param string $City
     * @param string $PostalCode
     * @param string $CountryCode
     */
    public function __construct($StreetLines, $City, $PostalCode, $CountryCode)
    {
        $this->StreetLines = $StreetLines;
        $this->City = $City;
        $this->PostalCode = $PostalCode;
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return string
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }

    /**
     * @param string $StreetLines
     * @return self
     */
    public function setStreetLines($StreetLines)
    {
        $this->StreetLines = $StreetLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return self
     */
    public function setStreetName($StreetName)
    {
        $this->StreetName = $StreetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     * @return self
     */
    public function setStreetNumber($StreetNumber)
    {
        $this->StreetNumber = $StreetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines2()
    {
        return $this->StreetLines2;
    }

    /**
     * @param string $StreetLines2
     * @return self
     */
    public function setStreetLines2($StreetLines2)
    {
        $this->StreetLines2 = $StreetLines2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines3()
    {
        return $this->StreetLines3;
    }

    /**
     * @param string $StreetLines3
     * @return self
     */
    public function setStreetLines3($StreetLines3)
    {
        $this->StreetLines3 = $StreetLines3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return self
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
     * @return self
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return self
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return self
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }
}
