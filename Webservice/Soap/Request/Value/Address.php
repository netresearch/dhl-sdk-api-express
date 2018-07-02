<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

/**
 * An shippers/recipients address.
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
     * The shippers/recipients street address.
     * 
     * @var null|StreetLines
     */
    private $StreetLines;

    /**
     * Additional shippers/recipients street address information preferably room or floor.
     *
     * @var null|StreetLines
     */
    private $StreetLines2;

    /**
     * Additional shippers/recipients street address information preferably department name.
     *
     * @var null|StreetLines
     */
    private $StreetLines3;

    /**
     * The shippers/recipients street name.
     *
     * @var null|StreetLines
     */
    private $StreetName;

    /**
     * The shippers/recipients street number.
     *
     * @var null|StreetNumber
     */
    private $StreetNumber;

    /**
     * The shippers/recipients city.
     *
     * @var City
     */
    private $City;

    /**
     * The shippers/recipients state/province code.
     *
     * @var null|StateOrProvinceCode
     */
    private $StateOrProvinceCode;

    /**
     * The shippers/recipients postal code.
     *
     * @var PostalCode
     */
    private $PostalCode;

    /**
     * The shippers/recipients country code.
     *
     * @var CountryCode
     */
    private $CountryCode;

    /**
     * Constructor.
     *
     * @param string $city        The shippers/recipients city
     * @param string $postalCode  The shippers/recipients postal code
     * @param string $countryCode The shippers/recipients country code
     */
    public function __construct(string $city, string $postalCode, string $countryCode)
    {
        $this->setCity($city)
            ->setPostalCode($postalCode)
            ->setCountryCode($countryCode);
    }

    /**
     * Returns the shippers/recipients street address.
     *
     * @return null|StreetLines
     */
    public function getStreetLines(): ?StreetLines
    {
        return $this->StreetLines;
    }

    /**
     * Sets the shippers/recipients street address.
     *
     * @param string $streetLines The shippers/recipients street address
     *
     * @return self
     */
    public function setStreetLines(string $streetLines): Address
    {
        $this->StreetLines = new StreetLines($streetLines);
        return $this;
    }

    /**
     * Returns the additional shippers/recipients street address information, preferably room or floor.
     *
     * @return null|StreetLines
     */
    public function getStreetLines2(): ?StreetLines
    {
        return $this->StreetLines2;
    }

    /**
     * Sets the additional shippers/recipients street address information, preferably room or floor.
     *
     * @param string $streetLines2 The additional shippers/recipients street address information,
     *                             preferably room or floor
     *
     * @return self
     */
    public function setStreetLines2(string $streetLines2): Address
    {
        $this->StreetLines2 = new StreetLines($streetLines2);
        return $this;
    }

    /**
     * Returns the additional shippers/recipients street address information, preferably department name.
     *
     * @return null|StreetLines
     */
    public function getStreetLines3(): ?StreetLines
    {
        return $this->StreetLines3;
    }

    /**
     * Sets the additional shippers/recipients street address information, preferably department name.
     *
     * @param string $streetLines3 The additional shippers/recipients street address information,
     *                             preferably department name
     *
     * @return self
     */
    public function setStreetLines3(string $streetLines3): Address
    {
        $this->StreetLines3 = new StreetLines($streetLines3);
        return $this;
    }

    /**
     * Returns the shippers/recipients street name.
     *
     * @return null|StreetLines
     */
    public function getStreetName(): ?StreetLines
    {
        return $this->StreetName;
    }

    /**
     * Sets the shippers/recipients street name.
     *
     * @param string $streetName The shippers/recipients street name
     *
     * @return self
     */
    public function setStreetName(string $streetName): Address
    {
        $this->StreetName = new StreetLines($streetName);
        return $this;
    }

    /**
     * Returns the shippers/recipients street number.
     *
     * @return null|StreetNumber
     */
    public function getStreetNumber(): ?StreetNumber
    {
        return $this->StreetNumber;
    }

    /**
     * Sets the shippers/recipients street number.
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
     * Returns the shippers/recipients city.
     *
     * @return City
     */
    public function getCity(): City
    {
        return $this->City;
    }

    /**
     * Sets the shippers/recipients street number.
     *
     * @param string $city The shippers/recipients street number
     *
     * @return self
     */
    public function setCity(string $city): Address
    {
        $this->City = new City($city);
        return $this;
    }

    /**
     * Returns the shippers/recipients state or province code.
     *
     * @return null|StateOrProvinceCode
     */
    public function getStateOrProvinceCode(): ?StateOrProvinceCode
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * Sets the shippers/recipients state or province code.
     *
     * @param string $stateOrProvinceCode The shippers/recipients state or province code
     *
     * @return self
     */
    public function setStateOrProvinceCode(string $stateOrProvinceCode): Address
    {
        $this->StateOrProvinceCode = new StateOrProvinceCode($stateOrProvinceCode);
        return $this;
    }

    /**
     * Returns the shippers/recipients postal code.
     *
     * @return PostalCode
     */
    public function getPostalCode(): PostalCode
    {
        return $this->PostalCode;
    }

    /**
     * Sets the shippers/recipients postal code.
     *
     * @param string $postalCode The shippers/recipients postal code
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): Address
    {
        $this->PostalCode = new PostalCode($postalCode);
        return $this;
    }

    /**
     * Returns the shippers/recipients country code.
     *
     * @return CountryCode
     */
    public function getCountryCode(): CountryCode
    {
        return $this->CountryCode;
    }

    /**
     * Sets the shippers/recipients country code.
     *
     * @param string $countryCode The shippers/recipients country code
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): Address
    {
        $this->CountryCode = new CountryCode($countryCode);
        return $this;
    }
}
