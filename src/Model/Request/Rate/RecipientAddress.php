<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\RecipientAddressInterface;

/**
 * Recipient Address.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RecipientAddress implements RecipientAddressInterface
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

    /**
     * @inheritdoc
     */
    public function getStreetLines()
    {
        return $this->streetLines;
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
     * @@inheritdoc
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
