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
     * Returns whether this is a scheduled pickup or not.
     *
     * @param bool $unscheduledPickup
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setIsUnscheduledPickup($unscheduledPickup);

    /**
     * Sets the terms of trade.
     *
     * @param string $termsOfTrade
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setTermsOfTrade($termsOfTrade);

    /**
     * Sets the terms of trade.
     *
     * @param string $contentType
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setContentType($contentType);

    /**
     * Sets the shipment timestamp.
     *
     * @param \DateTime $readyAtTimestamp
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setReadyAtTimestamp(\DateTime $readyAtTimestamp);

    /**
     * Sets the number of pieces.
     *
     * @param int $numberOfPieces
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setNumberOfPieces($numberOfPieces);

    /**
     * Sets the currency.
     *
     * @param string $currencyCode
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setCurrency($currencyCode);

    /**
     * Sets the description.
     *
     * @param string $description
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setDescription($description);

    /**
     * Sets the customs value.
     *
     * @param float $customsValue
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setCustomsValue($customsValue);

    /**
     * Sets the serviceType.
     *
     * @param string $serviceType
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setServiceType($serviceType);

    /**
     * Sets the payers account number.
     *
     * @param string $accountNumber
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setPayerAccountNumber($accountNumber);

    /**
     * Sets the billing account number.
     *
     * @param string $accountNumber
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setBillingAccountNumber($accountNumber);

    /**
     * Sets the insurance.
     *
     * @param float $insuranceValue
     * @param string $insuranceCurrency
     * @param string $insuranceType
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setInsurance($insuranceValue, $insuranceCurrency, $insuranceType = '');

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
        $countryCode,
        $postalCode,
        $city,
        array $streetLines,
        $name,
        $company,
        $phone,
        $email = null
    );

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
        $countryCode,
        $postalCode,
        $city,
        array $streetLines,
        $name,
        $company,
        $phone,
        $email = null
    );

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
        $sequenceNumber,
        $weight,
        $weightUOM,
        $length,
        $width,
        $height,
        $dimensionsUOM,
        $customerReferences
    );

    /**
     * Set dry ice.
     *
     * @param string $unCode
     * @param float $weight
     *
     * @return ShipmentRequestBuilderInterface
     */
    public function setDryIce($unCode, $weight);

    /**
     * Builds the shipment request instance.
     *
     * @return ShipmentRequestInterface
     */
    public function build();
}
