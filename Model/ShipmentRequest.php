<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
use Dhl\Express\Api\Data\Request\Shipment\PackageInterface;
use Dhl\Express\Api\Data\Request\Shipment\RecipientInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipperInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Model\Request\Shipment\Recipient;
use Dhl\Express\Model\Request\Shipment\Shipper;

/**
 * Shipment Request.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentRequest implements ShipmentRequestInterface
{
    /**
     * @var ShipmentDetailsInterface
     */
    private $shipmentDetails;

    /**
     * @var string
     */
    private $payerAccountNumber;

    /**
     * @var string
     */
    private $billingAccountNumber;

    /**
     * @var InsuranceInterface
     */
    private $insurance;

    /**
     * @var Shipper
     */
    private $shipper;

    /**
     * @var Recipient
     */
    private $recipient;

    /**
     * @var PackageInterface[]
     */
    private $packages;

    /**
     * @var DryIceInterface
     */
    private $dryIce;

    /**
     * SoapShipmentRequest constructor.
     *
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param string                   $payerAccountNumber
     * @param Shipper                  $shipper
     * @param Recipient                $recipient
     * @param array                    $packages
     */
    public function __construct(
        ShipmentDetailsInterface $shipmentDetails,
        string $payerAccountNumber,
        Shipper $shipper,
        Recipient $recipient,
        array $packages
    ) {
        $this->shipmentDetails    = $shipmentDetails;
        $this->payerAccountNumber = $payerAccountNumber;
        $this->shipper            = $shipper;
        $this->recipient          = $recipient;
        $this->packages           = $packages;
    }

    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails(): ShipmentDetailsInterface
    {
        return $this->shipmentDetails;
    }

    /**
     * @inheritdoc
     */
    public function getPayerAccountNumber(): string
    {
        return $this->payerAccountNumber;
    }

    /**
     * @inheritdoc
     */
    public function getBillingAccountNumber(): string
    {
        return $this->billingAccountNumber;
    }

    /**
     * Sets the billing account number.
     *
     * @param string $billingAccountNumber The billing account number
     *
     * @return self
     */
    public function setBillingAccountNumber(string $billingAccountNumber): ShipmentRequest
    {
        $this->billingAccountNumber = $billingAccountNumber;
        return $this;
    }

    /**
     * @return null|InsuranceInterface
     */
    public function getInsurance(): ?InsuranceInterface
    {
        return $this->insurance;
    }

    /**
     * Sets the insurance instance.
     *
     * @param InsuranceInterface $insurance The insurance instance
     *
     * @return ShipmentRequest
     */
    public function setInsurance(InsuranceInterface $insurance): ShipmentRequest
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * @return ShipperInterface
     */
    public function getShipper(): ShipperInterface
    {
        return $this->shipper;
    }

    /**
     * @return RecipientInterface
     */
    public function getRecipient(): RecipientInterface
    {
        return $this->recipient;
    }

    /**
     * @return PackageInterface[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }

    /**
     * @return null|DryIceInterface
     */
    public function getDryIce(): ?DryIceInterface
    {
        return $this->dryIce;
    }

    /**
     * Sets the dry ice instance.
     *
     * @param DryIceInterface $dryIce The dry ice instance
     *
     * @return ShipmentRequest
     */
    public function setDryIce(DryIceInterface $dryIce): ShipmentRequest
    {
        $this->dryIce = $dryIce;
        return $this;
    }
}
