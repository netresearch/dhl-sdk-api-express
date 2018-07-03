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
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(string $city, string $postalCode, string $countryCode)
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
    public function getStreetLines(): ?StreetLines
    {
        return $this->StreetLines;
    }

    /**
     * Sets the street address.
     *
     * @param string $streetLines The street address
     *
     * @return self
     */
    public function setStreetLines(string $streetLines): Address
    {
        $this->StreetLines = new StreetLines($streetLines);
        return $this;
    }

    /**
     * Returns the additional street address information, preferably room or floor.
     *
     * @return null|StreetLines
     */
    public function getStreetLines2(): ?StreetLines
    {
        return $this->StreetLines2;
    }

    /**
     * Sets the additional street address information, preferably room or floor.
     *
     * @param string $streetLines2 The additional street address information, preferably room or floor
     *
     * @return self
     */
    public function setStreetLines2(string $streetLines2): Address
    {
        $this->StreetLines2 = new StreetLines($streetLines2);
        return $this;
    }

    /**
     * Returns the additional street address information, preferably department name.
     *
     * @return null|StreetLines
     */
    public function getStreetLines3(): ?StreetLines
    {
        return $this->StreetLines3;
    }

    /**
     * Sets the additional street address information, preferably department name.
     *
     * @param string $streetLines3 The additional street address information, preferably department name
     *
     * @return self
     */
    public function setStreetLines3(string $streetLines3): Address
    {
        $this->StreetLines3 = new StreetLines($streetLines3);
        return $this;
    }

    /**
     * Returns the street name.
     *
     * @return null|StreetLines
     */
    public function getStreetName(): ?StreetLines
    {
        return $this->StreetName;
    }

    /**
     * Sets the street name.
     *
     * @param string $streetName The street name
     *
     * @return self
     */
    public function setStreetName(string $streetName): Address
    {
        $this->StreetName = new StreetLines($streetName);
        return $this;
    }

    /**
     * Returns the street number.
     *
     * @return null|StreetNumber
     */
    public function getStreetNumber(): ?StreetNumber
    {
        return $this->StreetNumber;
    }

    /**
     * Sets the street number.
     *
     * @param string $streetNumber
     *
     * @return self
     */
    public function setStreetNumber(string $streetNumber): Address
    {
        $this->StreetNumber = new StreetNumber($streetNumber);
        return $this;
    }

    /**
     * Returns the city.
     *
     * @return City
     */
    public function getCity(): City
    {
        return $this->City;
    }

    /**
     * Sets the street number.
     *
     * @param string $city The street number
     *
     * @return self
     */
    public function setCity(string $city): Address
    {
        $this->City = new City($city);
        return $this;
    }

    /**
     * Returns the state or province code.
     *
     * @return null|StateOrProvinceCode
     */
    public function getStateOrProvinceCode(): ?StateOrProvinceCode
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * Sets the state or province code.
     *
     * @param string $stateOrProvinceCode The state or province code
     *
     * @return self
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode): Address
    {
        $this->StateOrProvinceCode = new StateOrProvinceCode($stateOrProvinceCode);
        return $this;
    }

    /**
     * Returns the postal code.
     *
     * @return PostalCode
     */
    public function getPostalCode(): PostalCode
    {
        return $this->PostalCode;
    }

    /**
     * Sets the postal code.
     *
     * @param string $postalCode The postal code
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): Address
    {
        $this->PostalCode = new PostalCode($postalCode);
        return $this;
    }

    /**
     * Returns the country code.
     *
     * @return CountryCode
     */
    public function getCountryCode(): CountryCode
    {
        return $this->CountryCode;
    }

    /**
     * Sets the country code.
     *
     * @param string $countryCode The country code
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): Address
    {
        $this->CountryCode = new CountryCode($countryCode);
        return $this;
    }
}
