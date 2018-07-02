<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\ShipperAddressInterface;
use Dhl\Express\Api\Data\Request\SpecialServiceInterface;
use Dhl\Express\Api\RateRequestBuilderInterface;
use Dhl\Express\Model\RateRequest;
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
     * @var SpecialServiceInterface[]
     */
    private $specialServices;

    /**
     * @var bool
     */
    private $unscheduledPickup;

    /**
     * @var string
     */
    private $shipperAccountNumber;

    /**
     * @var string
     */
    private $termsOfTrade;

    /**
     * @var string
     */
    private $contentType;
    /**
     * @var string
     */
    private $dimensionsUOM;

    /**
     * @var string
     */
    private $weightUOM;

    /**
     * @var int
     */
    private $readyAtTimestamp;

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
    ): void {
        $this->packages[] = new Package(
            $sequenceNumber,
            $weight,
            $length,
            $width,
            $height
        );
    }

    /**
     * @param SpecialServiceInterface $specialService
     * @return void
     */
    public function addSpecialService(SpecialServiceInterface $specialService): void
    {
        $this->specialServices[] = $specialService;
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
     * @param string $termsOfTrade
     */
    public function setTermsOfTrade(string $termsOfTrade): void
    {
        $this->termsOfTrade = $termsOfTrade;
    }

    /**
     * @param string $contentType
     */
    public function setContentType(string $contentType): void
    {
        $this->contentType = $contentType;
    }

    /**
     * @param string $dimensionsUOM
     */
    public function setDimensionsUOM(string $dimensionsUOM): void
    {
        $this->dimensionsUOM = $dimensionsUOM;
    }

    /**
     * @param string $weightUOM
     */
    public function setWeightUOM(string $weightUOM): void
    {
        $this->weightUOM = $weightUOM;
    }

    /**
     * @param int $readyAtTimestamp
     */
    public function setReadyAtTimestamp(int $readyAtTimestamp): void
    {
        $this->readyAtTimestamp = $readyAtTimestamp;
    }

    /**
     * @return RateRequestInterface
     */
    public function build(): RateRequestInterface
    {
        $shipmentDetails = new ShipmentDetails(
            $this->unscheduledPickup,
            $this->termsOfTrade,
            $this->contentType,
            $this->dimensionsUOM,
            $this->weightUOM,
            $this->readyAtTimestamp
        );

        $request = new RateRequest(
            $this->shipperAddress,
            $this->shipperAccountNumber,
            $this->recipientAddress,
            $shipmentDetails,
            $this->packages,
            $this->specialServices
        );

        return $request;
    }
}
