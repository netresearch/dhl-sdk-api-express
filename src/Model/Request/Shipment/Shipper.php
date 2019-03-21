<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\ShipperInterface;

/**
 * Shipper.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Shipper implements ShipperInterface
{
    /**
     * The street lines.
     *
     * @var array
     */
    private $streetLines;

    /**
     * The city name.
     *
     * @var string
     */
    private $city;

    /**
     * The postal code.
     *
     * @var string
     */
    private $postalCode;

    /**
     * The country code.
     *
     * @var string
     */
    private $countryCode;

    /**
     * The name.
     *
     * @var string
     */
    private $name;

    /**
     * The company.
     *
     * @var string
     */
    private $company;

    /**
     * The phone number.
     *
     * @var string
     */
    private $phone;

    /**
     * The email.
     *
     * @var string
     */
    private $email;

    /**
     * Shipper constructor.
     *
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param array  $streetLines
     * @param string $name
     * @param string $company
     * @param string $phone
     * @param string|null $email
     */
    public function __construct(
        $countryCode,
        $postalCode,
        $city,
        array $streetLines,
        $name,
        $company,
        $phone,
        $email = null
    ) {
        $this->countryCode = $countryCode;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->streetLines = $streetLines;
        $this->name = $name;
        $this->company = $company;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * @return array
     */
    public function getStreetLines()
    {
        return $this->streetLines;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
