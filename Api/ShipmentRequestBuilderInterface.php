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
    public function setIsUnscheduledPickup(bool $unscheduledPickup);

    /**
     * Sets the terms of trade.
     *
     * @param string $termsOfTrade
     *
     * @return self
     */
    public function setTermsOfTrade(string $termsOfTrade);

    /**
     * Sets the terms of trade.
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType);

    /**
     * Sets the shipment timestamp.
     *
     * @param int $readyAtTimestamp
     *
     * @return self
     */
    public function setReadyAtTimestamp(int $readyAtTimestamp);

    /**
     * Sets the number of pieces.
     *
     * @param int $numberOfPieces
     *
     * @return self
     */
    public function setNumberOfPieces(int $numberOfPieces);

    /**
     * Sets the currency.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrency(string $currencyCode);

    /**
     * Sets the description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description);

    /**
     * Sets the customs value.
     *
     * @param float $customsValue
     *
     * @return self
     */
    public function setCustomsValue(float $customsValue);

    /**
     * Sets the serviceType.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType);

    /**
     * Sets the payers account number.
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setPayerAccountNumber(string $accountNumber);

    /**
     * Sets the billing account number.
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setBillingAccountNumber(string $accountNumber);

    /**
     * Sets the insurance.
     *
     * @param float $insuranceValue
     * @param string $insuranceCurrency
     *
     * @return self
     */
    public function setInsurance(float $insuranceValue, string $insuranceCurrency);

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
    );

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
    );

    /**
     * Set dry ice.
     *
     * @param string $unCode
     * @param float $weight
     *
     * @return self
     */
    public function setDryIce(string $unCode, float $weight);

    /**
     * Builds the shipment request instance.
     *
     * @return ShipmentRequestInterface
     */
    public function build();
}
