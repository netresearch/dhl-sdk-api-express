<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\ShipperAddressInterface;

/**
 * Shipper Address.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipperAddress implements ShipperAddressInterface
{
    /**
     * The shippers city name.
     *
     * @var string
     */
    private $city;

    /**
     * The shippers postal code.
     *
     * @var string
     */
    private $postalCode;

    /**
     * The shippers country code.
     *
     * @var string
     */
    private $countryCode;

    /**
     * Constructor.
     *
     * @param string $countryCode The shippers country code
     * @param string $postalCode  The shippers postal code
     * @param string $city        The shippers city name
     */
    public function __construct($countryCode, $postalCode, $city)
    {
        $this->countryCode = $countryCode;
        $this->postalCode  = $postalCode;
        $this->city        = $city;
    }

    /**
     * @inheritdoc
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @inheritdoc
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @inheritdoc
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
