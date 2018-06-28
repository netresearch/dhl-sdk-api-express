<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\RateRequestInterface;

/**
 * Rate Request Builder.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RateRequestBuilderInterface
{
    /**
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @return void
     */
    public function setShipperAddress(string $countryCode, string $postalCode, string $city): void;

    /**
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param string[] $streetLines
     * @return void
     */
    public function setRecipientAddress(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines
    ): void;

    /**
     * @param int $sequenceNumber
     * @param float $weight
     * @param string $weightUOM
     * @param float $length
     * @param float $width
     * @param float $height
     * @param string $dimensionsUOM
     * @param int $readyAtTimestamp
     * @param string $contentType
     * @param string $termsOfTrade
     * @return void
     */
    public function addPackage(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM,
        int $readyAtTimestamp,
        string $contentType,
        string $termsOfTrade
    ): void;

    /**
     * @param float $value
     * @param string $currencyCode
     * @return void
     */
    public function setInsurance(float $value, string $currencyCode): void;

    /**
     * @param bool $unscheduledPickup
     * @return void
     */
    public function setIsUnscheduledPickup(bool $unscheduledPickup): void;

    /**
     * @param string $accountNumber
     * @return void
     */
    public function setShipperAccountNumber(string $accountNumber): void;

    /**
     * @return RateRequestInterface
     */
    public function build(): RateRequestInterface;
}
