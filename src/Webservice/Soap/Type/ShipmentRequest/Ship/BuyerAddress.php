<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address as ShipmentAddress;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address\BuildingName;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address\CityDistrict;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Address\CountryName;

/**
 * An buyer address.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class BuyerAddress extends ShipmentAddress
{
    /**
     * The building name.
     *
     * @var null|BuildingName
     */
    private $BuildingName;

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
     * Returns the building name.
     *
     * @return null|BuildingName
     */
    public function getBuildingName()
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
    public function setBuildingName($buildingName)
    {
        $this->BuildingName = new BuildingName($buildingName);
        return $this;
    }

    /**
     * Returns the city district.
     *
     * @return null|CityDistrict
     */
    public function getCityDistrict()
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
    public function setCityDistrict($cityDistrict)
    {
        $this->CityDistrict = new CityDistrict($cityDistrict);
        return $this;
    }

    /**
     * Returns the country name.
     *
     * @return null|CountryName
     */
    public function getCountryName()
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
    public function setCountryName($countryName)
    {
        $this->CountryName = new CountryName($countryName);
        return $this;
    }
}
