<?php
/**
 * See LICENSE.md for license details.
 */


namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ShipperAddressInterface;

/**
 * Shipper Address.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipperAddress implements ShipperAddressInterface
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * RecipientAdress constructor.
     * @param string $city
     * @param string $postalCode
     * @param string $countryCode
     */
    public function __construct(string $city, string $postalCode, string $countryCode)
    {
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
}
