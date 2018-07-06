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
     * @param string $weightUOM
     * @param float $length
     * @param float $width
     * @param float $height
     * @param string $dimensionsUOM
     */
    public function addPackage(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM
    ): void {
        $weightDetails = $this->normalizeWeight($weight, strtoupper($weightUOM));
        $dimensionsDetails = $this->normalizeDimensions($length, $width, $height, strtoupper($dimensionsUOM));

        $this->data['packages'][] = [
            'sequenceNumber' => $sequenceNumber,
            'weight' => $weightDetails['weight'],
            'weightUOM' => $weightDetails['uom'],
            'length' => $dimensionsDetails['length'],
            'width' => $dimensionsDetails['width'],
            'height' => $dimensionsDetails['height'],
            'dimensionsUOM' => $dimensionsDetails['uom']
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
            $this->data['readyAtTimestamp']
        );

        // build packages
        $packages = [];
        foreach ($this->data['packages'] as $package) {
            $packages[] = new Package(
                $package['sequenceNumber'],
                $package['weight'],
                $package['weightUOM'],
                $package['length'],
                $package['width'],
                $package['height'],
                $package['dimensionsUOM']
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

    /**
     * Normalizes the weight and unit of measurement to the unit of measurement KG (kilograms) or LB (Pound)
     * supported by the DHL express webservice.
     *
     * @param float  $weight The weight
     * @param string $uom    The unit of measurement
 *

     * @return array
     * @throws \InvalidArgumentException
     */
    private function normalizeWeight(float $weight, string $uom): array
    {
        if (($uom === Package::UOM_WEIGHT_KG) || ($uom === Package::UOM_WEIGHT_LB)) {
            return [
                'weight' => $weight,
                'uom'    => $uom,
            ];
        }

        if ($uom === Package::UOM_WEIGHT_G) {
            return [
                'weight' => $weight / 1000,
                'uom'    => Package::UOM_WEIGHT_KG,
            ];
        }

        if ($uom === Package::UOM_WEIGHT_OZ) {
            return [
                'weight' => $weight / 16,
                'uom'    => Package::UOM_WEIGHT_LB,
            ];
        }

        throw new \InvalidArgumentException(
            'Invalid weight unit of measurement'
        );
    }

    /**
     * Normalizes the dimensions to the unit of measurement CM (centimeter) or IN (inch) supported by the
     * DHL express webservice.
     *
     * @param float  $length The length of a package
     * @param float  $width  The width of a package
     * @param float  $height The height of a package
     * @param string $uom    The unit of measurement
     *
     * @return array
     * @throws \InvalidArgumentException
     */
    private function normalizeDimensions(float $length, float $width, float $height, string $uom): array
    {
        if (($uom === Package::UOM_DIMENSION_CM) || ($uom === Package::UOM_DIMENSION_IN)) {
            return [
                'length' => $length,
                'width'  => $width,
                'height' => $height,
                'uom'    => $uom,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_MM) {
            return [
                'length' => $length / 10,
                'width'  => $width / 10,
                'height' => $height / 10,
                'uom'    => Package::UOM_DIMENSION_CM,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_M) {
            return [
                'length' => $length * 100,
                'width'  => $width * 100,
                'height' => $height * 100,
                'uom'    => Package::UOM_DIMENSION_CM,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_FT) {
            return [
                'length' => $length * 12,
                'width'  => $width * 12,
                'height' => $height * 12,
                'uom'    => Package::UOM_DIMENSION_IN,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_YD) {
            return [
                'length' => $length * 36,
                'width'  => $width * 36,
                'height' => $height * 36,
                'uom'    => Package::UOM_DIMENSION_IN,
            ];
        }

        throw new \InvalidArgumentException(
            'Invalid dimensions unit of measurement'
        );
    }
}
