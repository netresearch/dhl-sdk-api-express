<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\RateRequestBuilderInterface;
use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Rate\Package;
use Dhl\Express\Model\Request\Rate\RecipientAddress;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\Model\Request\Rate\ShipperAddress;
use InvalidArgumentException;

/**
 * Rate Request Builder.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateRequestBuilder implements RateRequestBuilderInterface
{
    /**
     * The collected data used to build the rate request.
     *
     * @var mixed[]
     */
    private $data = [];

    /**
     * Normalizes the weight and unit of measurement to the unit of measurement KG (kilograms) or LB (Pound)
     * supported by the DHL express webservice.
     *
     * @param float  $weight The weight
     * @param string $uom    The unit of measurement
     *
     * @return float[]|string[]
     *
     * @throws InvalidArgumentException
     */
    private function normalizeWeight($weight, $uom)
    {
        if (($uom === Package::UOM_WEIGHT_KG) || ($uom === Package::UOM_WEIGHT_LB)) {
            return [
                'weight' => $weight,
                'uom' => $uom,
            ];
        }

        if ($uom === Package::UOM_WEIGHT_G) {
            return [
                'weight' => $weight / 1000,
                'uom' => Package::UOM_WEIGHT_KG,
            ];
        }

        if ($uom === Package::UOM_WEIGHT_OZ) {
            return [
                'weight' => $weight / 16,
                'uom' => Package::UOM_WEIGHT_LB,
            ];
        }

        throw new InvalidArgumentException(
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
     * @return float[]|string[]
     *
     * @throws InvalidArgumentException
     */
    private function normalizeDimensions($length, $width, $height, $uom)
    {
        if (($uom === Package::UOM_DIMENSION_CM) || ($uom === Package::UOM_DIMENSION_IN)) {
            return [
                'length' => $length,
                'width' => $width,
                'height' => $height,
                'uom' => $uom,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_MM) {
            return [
                'length' => $length / 10,
                'width' => $width / 10,
                'height' => $height / 10,
                'uom' => Package::UOM_DIMENSION_CM,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_M) {
            return [
                'length' => $length * 100,
                'width' => $width * 100,
                'height' => $height * 100,
                'uom' => Package::UOM_DIMENSION_CM,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_FT) {
            return [
                'length' => $length * 12,
                'width' => $width * 12,
                'height' => $height * 12,
                'uom' => Package::UOM_DIMENSION_IN,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_YD) {
            return [
                'length' => $length * 36,
                'width' => $width * 36,
                'height' => $height * 36,
                'uom' => Package::UOM_DIMENSION_IN,
            ];
        }

        throw new InvalidArgumentException(
            'Invalid dimensions unit of measurement'
        );
    }

    public function setShipperAddress(
        $countryCode,
        $postalCode,
        $city
    ) {
        $this->data['shipperAddress'] = [
            'countryCode' => $countryCode,
            'postalCode' => $postalCode,
            'city' => $city,
        ];

        return $this;
    }

    public function setRecipientAddress(
        $countryCode,
        $postalCode,
        $city,
        array $streetLines
    ) {
        $this->data['recipientAddress'] = [
            'countryCode' => $countryCode,
            'postalCode' => $postalCode,
            'city' => $city,
            'streetLines' => $streetLines,
        ];

        return $this;
    }

    public function addPackage(
        $sequenceNumber,
        $weight,
        $weightUOM,
        $length,
        $width,
        $height,
        $dimensionsUOM
    ) {
        $weightDetails = $this->normalizeWeight($weight, strtoupper($weightUOM));
        $dimensionsDetails = $this->normalizeDimensions($length, $width, $height, strtoupper($dimensionsUOM));

        $this->data['packages'][] = [
            'sequenceNumber' => $sequenceNumber,
            'weight' => round((float) $weightDetails['weight'], 3),
            'weightUOM' => $weightDetails['uom'],
            'length' => $dimensionsDetails['length'],
            'width' => $dimensionsDetails['width'],
            'height' => $dimensionsDetails['height'],
            'dimensionsUOM' => $dimensionsDetails['uom'],
        ];

        return $this;
    }

    public function setIsUnscheduledPickup($unscheduledPickup)
    {
        $this->data['unscheduledPickup'] = $unscheduledPickup;
        return $this;
    }

    public function setShipperAccountNumber($accountNumber)
    {
        $this->data['shipperAccountNumber'] = $accountNumber;
        return $this;
    }

    public function setTermsOfTrade($termsOfTrade)
    {
        $this->data['termsOfTrade'] = $termsOfTrade;
        return $this;
    }

    public function setContentType($contentType)
    {
        $this->data['contentType'] = $contentType;
        return $this;
    }

    public function setReadyAtTimestamp($pickupTime)
    {
        $this->data['readyAtTimestamp'] = $pickupTime;
        return $this;
    }

    public function setInsurance($insuranceValue, $insuranceCurrency)
    {
        $this->data['insurance'] = [
            'value' => $insuranceValue,
            'currencyType' => $insuranceCurrency,
        ];
        return $this;
    }

    public function setIsValueAddedServicesRequested($requestValueAddedServices)
    {
        $this->data['isValueAddedServicesRequested'] = $requestValueAddedServices;
        return $this;
    }

    public function setNextBusinessDayIndicator($queryNextBusinessDay)
    {
        $this->data['nextBusinessDayIndicator'] = $queryNextBusinessDay;
        return $this;
    }

    public function build()
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
            $this->data['shipperAddress']['countryCode'],
            $this->data['shipperAddress']['postalCode'],
            $this->data['shipperAddress']['city']
        );

        // build shipment details
        $shipmentDetails = new ShipmentDetails(
            $this->data['unscheduledPickup'],
            $this->data['termsOfTrade'],
            $this->data['contentType'],
            $this->data['readyAtTimestamp'],
            $this->data['isValueAddedServicesRequested'],
            $this->data['nextBusinessDayIndicator']
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
        $insurance = null;
        if (array_key_exists('insurance', $this->data)) {
            $insurance = new Insurance(
                $this->data['insurance']['value'],
                $this->data['insurance']['currencyType']
            );
        }

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
