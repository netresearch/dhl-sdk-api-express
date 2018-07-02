<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Address as ShipmentAddress;

/**
 * An buyer address.
 * 
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class BuyerAddress extends ShipmentAddress
{
    /**
     * The building name.
     *
     * @var null|BuildingName
     */
    protected $BuildingName;

    /**
     * The city district.
     *
     * @var null|CityDistrict
     */
    private $CityDistrict;

    /**
     * The country name.
     *
     * @var null|CountryName
     */
    private $CountryName;

    /**
     * Constructor.
     *
     * @param string $streetLines The street lines
     * @param string $city        The city
     * @param string $postalCode  The postal code
     * @param string $countryCode The country code
     */
    public function __construct(string $streetLines, string $city, string $postalCode, string $countryCode)
    {
        $this->setStreetLines($streetLines)
            ->setCity($city)
            ->setPostalCode($postalCode)
            ->setCountryCode($countryCode);
    }

    /**
     * Returns the building name.
     *
     * @return null|BuildingName
     */
    public function getBuildingName(): ?BuildingName
    {
        return $this->BuildingName;
    }

    /**
     * Sets the building name.
     *
     * @param string $buildingName The building name
     *
     * @return self
     */
    public function setBuildingName(string $buildingName): BuyerAddress
    {
        $this->BuildingName = new BuildingName($buildingName);
        return $this;
    }

    /**
     * Returns the city district.
     *
     * @return null|CityDistrict
     */
    public function getCityDistrict(): ?CityDistrict
    {
        return $this->CityDistrict;
    }

    /**
     * Sets the city district.
     *
     * @param string $cityDistrict The city district
     *
     * @return self
     */
    public function setCityDistrict(string $cityDistrict): BuyerAddress
    {
        $this->CityDistrict = new CityDistrict($cityDistrict);
        return $this;
    }

    /**
     * Returns the country name.
     *
     * @return null|CountryName
     */
    public function getCountryName(): ?CountryName
    {
        return $this->CountryName;
    }

    /**
     * Sets the country name.
     *
     * @param string $countryName The country name
     *
     * @return self
     */
    public function setCountryName(string $countryName): BuyerAddress
    {
        $this->CountryName = new CountryName($countryName);
        return $this;
    }
}
