<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\SpecialServiceInterface;

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
     * @param float $length
     * @param float $width
     * @param float $height
     * @return void
     */
    public function addPackage(
        int $sequenceNumber,
        float $weight,
        float $length,
        float $width,
        float $height
    ): void;

    /**
     * @param SpecialServiceInterface $specialService
     * @return void
     */
    public function addSpecialService(SpecialServiceInterface $specialService): void;

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
