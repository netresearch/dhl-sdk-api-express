<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Ship;

use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\City;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\CountryCode;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\PostalCode;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\StateOrProvinceCode;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\StreetLines;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\StreetNumber;

/**
 * An address.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Address
{
    /**
     * The street address.
     *
     * @var null|StreetLines
     */
    protected $StreetLines;

    /**
     * The street name.
     *
     * @var null|StreetLines
     */
    protected $StreetName;

    /**
     * Additional street address information preferably room or floor.
     *
     * @var null|StreetLines
     */
    protected $StreetLines2;

    /**
     * Additional street address information preferably department name.
     *
     * @var null|StreetLines
     */
    protected $StreetLines3;

    /**
     * The street number.
     *
     * @var null|StreetNumber
     */
    protected $StreetNumber;

    /**
     * The city.
     *
     * @var City
     */
    protected $City;

    /**
     * The state/province code.
     *
     * @var null|StateOrProvinceCode
     */
    protected $StateOrProvinceCode;

    /**
     * The postal code.
     *
     * @var PostalCode
     */
    protected $PostalCode;

    /**
     * The country code.
     *
     * @var CountryCode
     */
    protected $CountryCode;

    /**
     * Constructor.
     *
     * @param string $city        The city
     * @param string $postalCode  The postal code
     * @param string $countryCode The country code
     */
    public function __construct($city, $postalCode, $countryCode)
    {
        $this->setCity($city)
            ->setPostalCode($postalCode)
            ->setCountryCode($countryCode);
    }

    /**
     * Returns the street address.
     *
     * @return null|StreetLines
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }

    /**
     * Sets the street address.
     *
     * @param string $streetLines The street address
     *
     * @return static
     */
    public function setStreetLines($streetLines)
    {
        $this->StreetLines = new StreetLines($streetLines);
        return $this;
    }

    /**
     * Returns the additional street address information, preferably room or floor.
     *
     * @return null|StreetLines
     */
    public function getStreetLines2()
    {
        return $this->StreetLines2;
    }

    /**
     * Sets the additional street address information, preferably room or floor.
     *
     * @param string $streetLines2 The additional street address information, preferably room or floor
     *
     * @return static
     */
    public function setStreetLines2($streetLines2)
    {
        $this->StreetLines2 = new StreetLines($streetLines2);
        return $this;
    }

    /**
     * Returns the additional street address information, preferably department name.
     *
     * @return null|StreetLines
     */
    public function getStreetLines3()
    {
        return $this->StreetLines3;
    }

    /**
     * Sets the additional street address information, preferably department name.
     *
     * @param string $streetLines3 The additional street address information, preferably department name
     *
     * @return static
     */
    public function setStreetLines3($streetLines3)
    {
        $this->StreetLines3 = new StreetLines($streetLines3);
        return $this;
    }

    /**
     * Returns the street name.
     *
     * @return null|StreetLines
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * Sets the street name.
     *
     * @param string $streetName The street name
     *
     * @return static
     */
    public function setStreetName($streetName)
    {
        $this->StreetName = new StreetLines($streetName);
        return $this;
    }

    /**
     * Returns the street number.
     *
     * @return null|StreetNumber
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    /**
     * Sets the street number.
     *
     * @param string $streetNumber
     *
     * @return static
     */
    public function setStreetNumber($streetNumber)
    {
        $this->StreetNumber = new StreetNumber($streetNumber);
        return $this;
    }

    /**
     * Returns the city.
     *
     * @return City
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets the street number.
     *
     * @param string $city The street number
     *
     * @return static
     */
    public function setCity($city)
    {
        $this->City = new City($city);
        return $this;
    }

    /**
     * Returns the state or province code.
     *
     * @return null|StateOrProvinceCode
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * Sets the state or province code.
     *
     * @param string $stateOrProvinceCode The state or province code
     *
     * @return static
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->StateOrProvinceCode = new StateOrProvinceCode($stateOrProvinceCode);
        return $this;
    }

    /**
     * Returns the postal code.
     *
     * @return PostalCode
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * Sets the postal code.
     *
     * @param string $postalCode The postal code
     *
     * @return static
     */
    public function setPostalCode($postalCode)
    {
        $this->PostalCode = new PostalCode($postalCode);
        return $this;
    }

    /**
     * Returns the country code.
     *
     * @return CountryCode
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets the country code.
     *
     * @param string $countryCode The country code
     *
     * @return static
     */
    public function setCountryCode($countryCode)
    {
        $this->CountryCode = new CountryCode($countryCode);
        return $this;
    }
}
