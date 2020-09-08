<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\ShipmentRequestBuilderInterface;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\Recipient;
use Dhl\Express\Model\Request\Shipment\DangerousGoods\DryIce;
use Dhl\Express\Model\Request\Shipment\LabelOptions;
use Dhl\Express\Model\Request\Shipment\ShipmentDetails;
use Dhl\Express\Model\Request\Shipment\Shipper;
use Dhl\Express\Model\ShipmentRequest;

/**
 * Shipment Request Builder.
 *
 * @author Ronny Gertler <ronny.gertler@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ShipmentRequestBuilder implements ShipmentRequestBuilderInterface
{
    /**
     * The collected data used to build the request.
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
     */
    private function normalizeWeight(float $weight, string $uom): array
    {
        if ($uom === Package::UOM_WEIGHT_KG) {
            return [
                'weight' => $weight,
                'uom' => Package::UOM_WEIGHT_KG,
            ];
        }

        if ($uom === Package::UOM_WEIGHT_LB) {
            return [
                'weight' => $weight,
                'uom' => Package::UOM_WEIGHT_LB,
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
     * @return float[]|string[]
     */
    private function normalizeDimensions(float $length, float $width, float $height, string $uom): array
    {
        if ($uom === Package::UOM_DIMENSION_CM) {
            return [
                'length' => $length,
                'width' => $width,
                'height' => $height,
                'uom' => Package::UOM_DIMENSION_CM,
            ];
        }

        if ($uom === Package::UOM_DIMENSION_IN) {
            return [
                'length' => $length,
                'width' => $width,
                'height' => $height,
                'uom' => Package::UOM_DIMENSION_IN,
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

        throw new \InvalidArgumentException(
            'Invalid dimensions unit of measurement'
        );
    }

    public function setIsUnscheduledPickup(bool $unscheduledPickup): ShipmentRequestBuilderInterface
    {
        $this->data['unscheduledPickup'] = $unscheduledPickup;

        return $this;
    }

    public function setTermsOfTrade(string $termsOfTrade): ShipmentRequestBuilderInterface
    {
        $this->data['termsOfTrade'] = $termsOfTrade;

        return $this;
    }

    public function setContentType(string $contentType): ShipmentRequestBuilderInterface
    {
        $this->data['contentType'] = $contentType;

        return $this;
    }

    public function setReadyAtTimestamp(\DateTime $readyAtTimestamp): ShipmentRequestBuilderInterface
    {
        $this->data['readyAtTimestamp'] = $readyAtTimestamp;

        return $this;
    }

    public function setNumberOfPieces(int $numberOfPieces): ShipmentRequestBuilderInterface
    {
        $this->data['numberOfPieces'] = $numberOfPieces;

        return $this;
    }

    public function setCurrency(string $currencyCode): ShipmentRequestBuilderInterface
    {
        $this->data['currencyCode'] = $currencyCode;

        return $this;
    }

    public function setDescription(string $description): ShipmentRequestBuilderInterface
    {
        $this->data['description'] = $description;

        return $this;
    }

    public function setCustomsValue(float $customsValue): ShipmentRequestBuilderInterface
    {
        $this->data['customsValue'] = $customsValue;

        return $this;
    }

    public function setServiceType(string $serviceType): ShipmentRequestBuilderInterface
    {
        $this->data['serviceType'] = $serviceType;

        return $this;
    }

    public function setPayerAccountNumber(string $accountNumber): ShipmentRequestBuilderInterface
    {
        $this->data['payerAccountNumber'] = $accountNumber;

        return $this;
    }

    public function setBillingAccountNumber(string $accountNumber): ShipmentRequestBuilderInterface
    {
        $this->data['billingAccountNumber'] = $accountNumber;

        return $this;
    }

    public function setInsurance(float $insuranceValue, string $insuranceCurrency): ShipmentRequestBuilderInterface
    {
        $this->data['insurance'] = [
            'value' => $insuranceValue,
            'currencyType' => $insuranceCurrency,
        ];

        return $this;
    }

    public function setWaybillDocumentRequested(bool $isRequested): ShipmentRequestBuilderInterface
    {
        $this->data['labelOptions'] = [
            'waybillDocument' => $isRequested
        ];

        return $this;
    }

    public function setShipper(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines,
        string $name,
        string $company,
        string $phone,
        string $email = null
    ): ShipmentRequestBuilderInterface {
        $this->data['shipper'] = [
            'countryCode' => $countryCode,
            'postalCode' => $postalCode,
            'city' => $city,
            'streetLines' => $streetLines,
            'name' => $name,
            'company' => $company,
            'phone' => $phone,
            'email' => $email
        ];

        return $this;
    }

    public function setRecipient(
        string $countryCode,
        string $postalCode,
        string $city,
        array $streetLines,
        string $name,
        string $company,
        string $phone,
        string $email = null
    ): ShipmentRequestBuilderInterface {
        $this->data['recipient'] = [
            'countryCode' => $countryCode,
            'postalCode' => $postalCode,
            'city' => $city,
            'streetLines' => $streetLines,
            'name' => $name,
            'company' => $company,
            'phone' => $phone,
            'email' => $email,
        ];

        return $this;
    }

    public function addPackage(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM,
        string $customerReferences
    ): ShipmentRequestBuilderInterface {
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
            'customerReferences' => $customerReferences,
        ];

        return $this;
    }

    public function setDryIce(string $unCode, float $weight): ShipmentRequestBuilderInterface
    {
        $this->data['dryIce'] = [
            'unCode' => $unCode,
            'weight' => $weight,
        ];

        return $this;
    }

    public function build(): ShipmentRequestInterface
    {
        // Build shipment details
        $shipmentDetails = new ShipmentDetails(
            $this->data['unscheduledPickup'],
            $this->data['termsOfTrade'],
            $this->data['contentType'],
            $this->data['readyAtTimestamp'],
            $this->data['numberOfPieces'],
            $this->data['currencyCode'],
            $this->data['description'],
            $this->data['customsValue'],
            $this->data['serviceType']
        );

        // Build shipper
        $shipper = new Shipper(
            $this->data['shipper']['countryCode'],
            $this->data['shipper']['postalCode'],
            $this->data['shipper']['city'],
            $this->data['shipper']['streetLines'],
            $this->data['shipper']['name'],
            $this->data['shipper']['company'],
            $this->data['shipper']['phone'],
            $this->data['shipper']['email']
        );

        // Build recipient
        $recipient = new Recipient(
            $this->data['recipient']['countryCode'],
            $this->data['recipient']['postalCode'],
            $this->data['recipient']['city'],
            $this->data['recipient']['streetLines'],
            $this->data['recipient']['name'],
            $this->data['recipient']['company'],
            $this->data['recipient']['phone'],
            $this->data['recipient']['email']
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
                $package['dimensionsUOM'],
                $package['customerReferences']
            );
        }

        // Build request
        $request = new ShipmentRequest(
            $shipmentDetails,
            $this->data['payerAccountNumber'],
            $shipper,
            $recipient,
            $packages
        );

        if (!empty($this->data['billingAccountNumber'])) {
            $request->setBillingAccountNumber($this->data['billingAccountNumber']);
        }

        // Build insurance
        if (isset($this->data['insurance']) && \is_array($this->data['insurance'])) {
            $insurance = new Insurance(
                $this->data['insurance']['value'],
                $this->data['insurance']['currencyType']
            );

            $request->setInsurance($insurance);
        }

        // Build dry ice
        if (isset($this->data['dryIce']) && \is_array($this->data['dryIce'])) {
            $dryIce = new DryIce(
                $this->data['dryIce']['unCode'],
                $this->data['dryIce']['weight']
            );

            $request->setDryIce($dryIce);
        }

        // build label options
        if (!empty($this->data['labelOptions']) && isset($this->data['labelOptions']['waybillDocument'])) {
            $labelOptions = new LabelOptions(
                $this->data['labelOptions']['waybillDocument']
            );

            $request->setLabelOptions($labelOptions);
        }

        $this->data = [];

        return $request;
    }
}
