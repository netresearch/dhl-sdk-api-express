<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\ShipperAddressInterface;
use Dhl\Express\Api\RateRequestBuilderInterface;
use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\InsuranceService;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\RecipientAddress;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Model\Request\ShipperAddress;

/**
 * Insurance Service Interface.
 *
 * @package  Dhl\Express\RequestBuilder
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequestBuilder implements RateRequestBuilderInterface
{
    /**
     * @var ShipperAddressInterface
     */
    private $shipperAddress;

    /**
     * @var RecipientAddressInterface
     */
    private $recipientAddress;

    /**
     * @var PackageInterface[]
     */
    private $packages;

    /**
     * @var InsuranceService
     */
    private $insuranceService;

    /**
     * @var bool
     */
    private $unscheduledPickup;

    /**
     * @var string
     */
    private $shipperAccountNumber;

    /**
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @return void
     */
    public function setShipperAddress(string $countryCode, string $postalCode, string $city): void
    {
        $this->shipperAddress = new ShipperAddress($countryCode, $postalCode, $city);
    }

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
    ): void {
        $this->recipientAddress = new RecipientAddress($countryCode, $postalCode, $city, $streetLines);
    }

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
    ): void {
        $this->packages[] = new Package(
            $sequenceNumber,
            $weight,
            $weightUOM,
            $length,
            $width,
            $height,
            $dimensionsUOM,
            $readyAtTimestamp,
            $contentType,
            $termsOfTrade
        );
    }

    /**
     * @param float $value
     * @param string $currencyCode
     * @return void
     */
    public function setInsurance(float $value, string $currencyCode): void
    {
        $this->insuranceService = new InsuranceService($value, $currencyCode);
    }

    /**
     * @param bool $unscheduledPickup
     * @return void
     */
    public function setIsUnscheduledPickup(bool $unscheduledPickup): void
    {
        $this->unscheduledPickup = $unscheduledPickup;
    }

    /**
     * @param string $accountNumber
     * @return void
     */
    public function setShipperAccountNumber(string $accountNumber): void
    {
        $this->shipperAccountNumber = $accountNumber;
    }

    /**
     * @return RateRequestInterface
     */
    public function build(): RateRequestInterface
    {
        $shipmentDetails = new ShipmentDetails($this->unscheduledPickup);

        $request = new RateRequest(
            $this->shipperAddress,
            $this->shipperAccountNumber,
            $this->recipientAddress,
            $shipmentDetails,
            $this->packages,
            $this->insuranceService
        );

        return $request;
    }
}
