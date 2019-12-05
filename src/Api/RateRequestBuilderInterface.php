<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\RateRequestInterface;
use InvalidArgumentException;

/**
 * Rate Request Builder.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
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
     * @return RateRequestBuilderInterface
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
     * @return RateRequestBuilderInterface
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
     * @return RateRequestBuilderInterface
     *
     * @throws InvalidArgumentException
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
     * @return RateRequestBuilderInterface
     */
    public function setIsUnscheduledPickup($unscheduledPickup);

    /**
     * Sets the shippers account number.
     *
     * @param string $accountNumber The account number
     *
     * @return RateRequestBuilderInterface
     */
    public function setShipperAccountNumber($accountNumber);

    /**
     * Sets the terms of trade.
     *
     * @param string $termsOfTrade The terms of trade
     *
     * @return RateRequestBuilderInterface
     */
    public function setTermsOfTrade($termsOfTrade);

    /**
     * Sets the terms of trade.
     *
     * @param string $contentType The content type
     *
     * @return RateRequestBuilderInterface
     */
    public function setContentType($contentType);

    /**
     * Sets the shipment timestamp.
     *
     * @param \DateTime $pickupTime The shipment time
     *
     * @return RateRequestBuilderInterface
     */
    public function setReadyAtTimestamp($pickupTime);

    /**
     * Sets the insurance.
     *
     * @param float  $insuranceValue    Insurance value
     * @param string $insuranceCurrency Insurance currency code
     *
     * @return RateRequestBuilderInterface
     */
    public function setInsurance($insuranceValue, $insuranceCurrency);

    /**
     * Sets if value added services should be included in the response
     *
     * @param bool $requestValueAddedServices
     * @return RateRequestBuilderInterface
     */
    public function setIsValueAddedServicesRequested($requestValueAddedServices);

    /**
     * Sets if products for the next day should be fetched if the DHL cutoff time is exceeded
     *
     * @param bool $queryNextBusinessDay
     * @return RateRequestBuilderInterface
     */
    public function setNextBusinessDayIndicator($queryNextBusinessDay);

    /**
     * Builds the rate request instance.
     *
     * @return RateRequestInterface
     */
    public function build();
}
