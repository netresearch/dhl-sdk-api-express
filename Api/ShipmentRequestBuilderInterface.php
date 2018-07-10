<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\ShipmentRequestInterface;

/**
 * Shipment Request Builder.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentRequestBuilderInterface
{
    /**
     * Returns whether this is a scheduled pickup or not.
     *
     * @param bool $unscheduledPickup
     *
     * @return self
     */
    public function setIsUnscheduledPickup(bool $unscheduledPickup): ShipmentRequestBuilderInterface;

    /**
     * Sets the terms of trade.
     *
     * @param string $termsOfTrade
     *
     * @return self
     */
    public function setTermsOfTrade(string $termsOfTrade): ShipmentRequestBuilderInterface;

    /**
     * Sets the terms of trade.
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType): ShipmentRequestBuilderInterface;

    /**
     * Sets the shipment timestamp.
     *
     * @param int $readyAtTimestamp
     *
     * @return self
     */
    public function setReadyAtTimestamp(int $readyAtTimestamp): ShipmentRequestBuilderInterface;

    /**
     * Sets the number of pieces.
     *
     * @param int $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(int $numberOfPieces): ShipmentRequestBuilderInterface;

    /**
     * Sets the currency.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrency(string $currencyCode): ShipmentRequestBuilderInterface;

    /**
     * Sets the description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): ShipmentRequestBuilderInterface;

    /**
     * Sets the serviceType.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): ShipmentRequestBuilderInterface;

    /**
     * Sets the payers account number.
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setPayerAccountNumber(string $accountNumber): ShipmentRequestBuilderInterface;

    /**
     * Sets the insurance.
     *
     * @param float $insuranceValue
     * @param string $insuranceCurrency
     *
     * @return self
     */
    public function setInsurance(float $insuranceValue, string $insuranceCurrency): ShipmentRequestBuilderInterface;

    /**
     * Sets the shipper.
     *
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param array $streetLines
     * @param string $name
     * @param string $company
     * @param string $phone
     *
     * @return self
     */
    public function setShipper(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines,
        string $name,
        string $company,
        string $phone
    ): ShipmentRequestBuilderInterface;

    /**
     * Sets the recipient.
     *
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param array $streetLines
     * @param string $name
     * @param string $company
     * @param string $phone
     *
     * @return self
     */
    public function setRecipient(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines,
        string $name,
        string $company,
        string $phone
    ): ShipmentRequestBuilderInterface;

    /**
     * Adds a package to the list of packages.
     *
     * @param int $sequenceNumber
     * @param float $weight
     * @param string $weightUOM
     * @param float $length
     * @param float $width
     * @param float $height
     * @param string $dimensionsUOM
     * @param string $customerReferences
     *
     * @return self
     */
    public function addPackage(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM,
        string $customerReferences
    ): ShipmentRequestBuilderInterface;

    /**
     * Set dry ice.
     *
     * @param string $unCode
     * @param float $weight
     *
     * @return self
     */
    public function setDryIce(string $unCode, float $weight): ShipmentRequestBuilderInterface;

    /**
     * Builds the shipment request instance.
     *
     * @return ShipmentRequestInterface
     */
    public function build(): ShipmentRequestInterface;
}
