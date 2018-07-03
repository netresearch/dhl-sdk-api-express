<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\RateRequestBuilderInterface;
use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\RecipientAddress;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Model\Request\ShipperAddress;

/**
 * Rate Request Builder.
 *
 * @package  Dhl\Express\RequestBuilder
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequestBuilder implements RateRequestBuilderInterface
{
    /**
     * @var mixed[]
     */
    private $data = [];

    /**
     * @param string $countryCode
     * @param string $postalCode
     * @param string $city
     * @return void
     */
    public function setShipperAddress(string $countryCode, string $postalCode, string $city): void
    {
        $shipperAddress = [
            'countryCode' => $countryCode,
            'postalCode' => $postalCode,
            'city' => $city

        ];

        $this->data['shipperAddress'] = $shipperAddress;
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
        $recipientAddress = [
            'countryCode' => $countryCode,
            'postalCode' => $postalCode,
            'city' => $city,
            'streetLines' => $streetLines,
        ];

        $this->data['recipientAddress'] = $recipientAddress;
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
        $this->data['packages'][] = [
            'sequenceNumber' => $sequenceNumber,
            'weight' => $weight,
            'length' => $length,
            'width' => $width,
            'height' => $height
        ];
    }

    /**
     * @param bool $unscheduledPickup
     * @return void
     */
    public function setIsUnscheduledPickup(bool $unscheduledPickup): void
    {
        $this->data['unscheduledPickup'] = $unscheduledPickup;
    }

    /**
     * @param string $accountNumber
     * @return void
     */
    public function setShipperAccountNumber(string $accountNumber): void
    {
        $this->data['shipperAccountNumber'] = $accountNumber;
    }

    /**
     * @param string $termsOfTrade
     */
    public function setTermsOfTrade(string $termsOfTrade): void
    {
        $this->data['termsOfTrade'] = $termsOfTrade;
    }

    /**
     * @param string $contentType
     */
    public function setContentType(string $contentType): void
    {
        $this->data['contentType'] = $contentType;
    }

    /**
     * @param string $dimensionsUOM
     */
    public function setDimensionsUOM(string $dimensionsUOM): void
    {
        $this->data['dimensionsUOM'] = $dimensionsUOM;
    }

    /**
     * @param string $weightUOM
     */
    public function setWeightUOM(string $weightUOM): void
    {
        $this->data['weightUOM'] = $weightUOM;
    }

    /**
     * @param int $readyAtTimestamp
     */
    public function setReadyAtTimestamp(int $readyAtTimestamp): void
    {
        $this->data['readyAtTimestamp'] = $readyAtTimestamp;
    }

    public function setInsurance(float $insuranceValue, string $insuranceCurrency): void
    {
        $insurance = [
            'value' => $insuranceValue,
            'currencyType' => $insuranceCurrency
        ];

        $this->data['insurance'] = $insurance;
    }

    /**
     * @return RateRequestInterface
     */
    public function build(): RateRequestInterface
    {
        // build recipient address
        $recipientAddress = new RecipientAddress(
            $this->data['recipientAddress']['countryCode'],
            $this->data['recipientAddress']['postalCode'],
            $this->data['recipientAddress']['city'],
            $this->data['recipientAddress']['streetLines']
        );

        // build shipper address
        $shipperAddress = new ShipperAddress(
            $this->data['recipientAddress']['countryCode'],
            $this->data['recipientAddress']['postalCode'],
            $this->data['recipientAddress']['city']
        );

        // build shipment details
        $shipmentDetails = new ShipmentDetails(
            $this->data['unscheduledPickup'],
            $this->data['termsOfTrade'],
            $this->data['contentType'],
            $this->data['dimensionsUOM'],
            $this->data['weightUOM'],
            $this->data['readyAtTimestamp']
        );

        // build packages
        $packages = [];
        foreach ($this->data['packages'] as $package) {
            $packages[] = new Package(
                $package['sequenceNumber'],
                $package['weight'],
                $package['length'],
                $package['width'],
                $package['height']
            );
        }

        // build insurance
        $insurance = new Insurance(
            $this->data['insurance']['value'],
            $this->data['insurance']['currencyType']
        );

        $request = new RateRequest(
            $shipperAddress,
            $this->data['shipperAccountNumber'],
            $recipientAddress,
            $shipmentDetails,
            $packages,
            $insurance
        );

        $this->data = [];

        return $request;
    }
}
