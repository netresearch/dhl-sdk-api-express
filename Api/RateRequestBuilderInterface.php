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
     * Sets the shippers address information.
     *
     * @param string $countryCode The country code
     * @param string $postalCode  The postal code
     * @param string $city        The city name
     *
     * @return self
     */
    public function setShipperAddress(
        $countryCode,
        $postalCode,
        $city
    );

    /**
     * Sets the recipients address information.
     *
     * @param string   $countryCode The country code
     * @param string   $postalCode  The postal code
     * @param string   $city        The city name
     * @param string[] $streetLines The street lines
     *
     * @return self
     */
    public function setRecipientAddress(
        $countryCode,
        $postalCode,
        $city,
        array $streetLines
    );

    /**
     * Adds a package to the list of packages.
     *
     * @param int    $sequenceNumber The number of the package
     * @param float  $weight         The package weight
     * @param string $weightUOM      The unit of measurement for the package weight
     * @param float  $length         The package length
     * @param float  $width          The package width
     * @param float  $height         The package height
     * @param string $dimensionsUOM  The unit of measurement for the package dimensions
     *
     * @return self
     */
    public function addPackage(
        $sequenceNumber,
        $weight,
        $weightUOM,
        $length,
        $width,
        $height,
        $dimensionsUOM
    );

    /**
     * Returns whether this is a scheduled pickup or not.
     *
     * @param bool $unscheduledPickup Whether this is a scheduled pickup or not
     *
     * @return self
     */
    public function setIsUnscheduledPickup($unscheduledPickup);

    /**
     * Sets the shippers account number.
     *
     * @param string $accountNumber The account number
     *
     * @return self
     */
    public function setShipperAccountNumber($accountNumber);

    /**
     * Sets the terms of trade.
     *
     * @param string $termsOfTrade The terms of trade
     *
     * @return self
     */
    public function setTermsOfTrade($termsOfTrade);

    /**
     * Sets the terms of trade.
     *
     * @param string $contentType The content type
     *
     * @return self
     */
    public function setContentType($contentType);

    /**
     * Sets the shipment timestamp.
     *
     * @param int $readyAtTimestamp The shipment timestamp
     *
     * @return self
     */
    public function setReadyAtTimestamp($readyAtTimestamp);

    /**
     * Sets the insurance.
     *
     * @param float  $insuranceValue    Insurance value
     * @param string $insuranceCurrency Insurance currency code
     *
     * @return self
     */
    public function setInsurance($insuranceValue, $insuranceCurrency);

    /**
     * Sets if value added services should be included in the response
     *
     * @param bool $requestValueAddedServices
     * @return self
     */
    public function setIsValueAddedServicesRequested($requestValueAddedServices);

    /**
     * Sets if products for the next day should be fetched if the DHL cutoff time is exceeded
     *
     * @param bool $queryNextBusinessDay
     * @return self
     */
    public function setNextBusinessDayIndicator($queryNextBusinessDay);

    /**
     * Builds the rate request instance.
     *
     * @return RateRequestInterface
     */
    public function build();
}
