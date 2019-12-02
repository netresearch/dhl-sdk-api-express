<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\RecipientAddressInterface;

/**
 * Recipient Address.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RecipientAddress implements RecipientAddressInterface
{
    /**
     * The country code.
     *
     * @var string
     */
    private $countryCode;

    /**
     * The postal code.
     *
     * @var string
     */
    private $postalCode;

    /**
     * The city name.
     *
     * @var string
     */
    private $city;

    /**
     * The street lines.
     *
     * @var string[]
     */
    private $streetLines;

    /**
     * Constructor.
     *
     * @param string   $countryCode The recipients country code
     * @param string   $postalCode  The recipients postal code
     * @param string   $city        The recipients city name
     * @param string[] $streetLines The recipients street lines
     */
    public function __construct($countryCode, $postalCode, $city, array $streetLines)
    {
        $this->countryCode = $countryCode;
        $this->postalCode  = $postalCode;
        $this->city        = $city;
        $this->streetLines = $streetLines;
    }

    public function getCountryCode()
    {
        return (string) $this->countryCode;
    }

    public function getPostalCode()
    {
        return (string) $this->postalCode;
    }

    public function getCity()
    {
        return (string) $this->city;
    }

    public function getStreetLines()
    {
        return $this->streetLines;
    }
}
