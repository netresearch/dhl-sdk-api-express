<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\ShipmentRequestInterface;

/**
 * Shipment Request Builder.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentRequestBuilderInterface
{
    /**
     * Sets whether this is a scheduled pickup or not.
     *
     * @param bool $unscheduledPickup
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setIsUnscheduledPickup(bool $unscheduledPickup): ShipmentRequestBuilderInterface;

    /**
     * Sets the terms of trade.
     *
     * @param string $termsOfTrade
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setTermsOfTrade(string $termsOfTrade): ShipmentRequestBuilderInterface;

    /**
     * Sets the terms of trade.
     *
     * @param string $contentType
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setContentType(string $contentType): ShipmentRequestBuilderInterface;

    /**
     * Sets the shipment timestamp.
     *
     * @param \DateTime $readyAtTimestamp
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setReadyAtTimestamp(\DateTime $readyAtTimestamp): ShipmentRequestBuilderInterface;

    /**
     * Sets the number of pieces.
     *
     * @param int $numberOfPieces
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setNumberOfPieces(int $numberOfPieces): ShipmentRequestBuilderInterface;

    /**
     * Sets the currency.
     *
     * @param string $currencyCode
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setCurrency(string $currencyCode): ShipmentRequestBuilderInterface;

    /**
     * Sets the description.
     *
     * @param string $description
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setDescription(string $description): ShipmentRequestBuilderInterface;

    /**
     * Sets the customs value.
     *
     * @param float $customsValue
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setCustomsValue(float $customsValue): ShipmentRequestBuilderInterface;

    /**
     * Sets the serviceType.
     *
     * @param string $serviceType
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setServiceType(string $serviceType): ShipmentRequestBuilderInterface;

    /**
     * Sets the payers account number.
     *
     * @param string $accountNumber
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setPayerAccountNumber(string $accountNumber): ShipmentRequestBuilderInterface;

    /**
     * Sets the billing account number.
     *
     * @param string $accountNumber
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setBillingAccountNumber(string $accountNumber): ShipmentRequestBuilderInterface;

    /**
     * Sets the insurance.
     *
     * @param float $insuranceValue
     * @param string $insuranceCurrency
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setInsurance(float $insuranceValue, string $insuranceCurrency): ShipmentRequestBuilderInterface;

    /**
     * Adds the waybill document request flag.
     *
     * @param bool $isRequested
     * @return ShipmentRequestBuilderInterface
     */
    public function setWaybillDocumentRequested(bool $isRequested): ShipmentRequestBuilderInterface;

    /**
     * Sets the shipper.
     *
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param string[] $streetLines
     * @param string $name
     * @param string $company
     * @param string $phone
     * @param string|null $email
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setShipper(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines,
        string $name,
        string $company,
        string $phone,
        string $email = null
    ): ShipmentRequestBuilderInterface;

    /**
     * Sets the recipient.
     *
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @param string[] $streetLines
     * @param string $name
     * @param string $company
     * @param string $phone
     * @param string|null $email
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setRecipient(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines,
        string $name,
        string $company,
        string $phone,
        string $email = null
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
     * @return ShipmentRequestBuilderInterface
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
     * @return ShipmentRequestBuilderInterface
     */
    public function setDryIce(string $unCode, float $weight): ShipmentRequestBuilderInterface;

    /**
     * Builds the shipment request instance.
     *
     * @return ShipmentRequestInterface
     */
    public function build(): ShipmentRequestInterface;
}
