<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\RecipientAddressInterface;

/**
 * Recipient Address.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RecipientAddress implements RecipientAddressInterface
{
    /**
     * @var array
     */
    private $streetLines;

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
     * RecipientAddress constructor.
     * @param string   $countryCode
     * @param string   $postalCode
     * @param string   $city
     * @param string[] $streetLines
     */
    public function __construct(string $countryCode, string $postalCode, string $city, array $streetLines)
    {
        $this->countryCode = $countryCode;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->streetLines = $streetLines;
    }

    /**
     * @return string[]
     */
    public function getStreetLines(): array
    {
        return $this->streetLines;
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
