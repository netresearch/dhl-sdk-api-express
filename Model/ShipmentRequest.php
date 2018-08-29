<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\ShipperInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Model\Request\Recipient;
use Dhl\Express\Model\Request\Shipper;

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
     * @var null|string
     */
    private $billingAccountNumber;

    /**
     * @var null|InsuranceInterface
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
     * @var null|DryIceInterface
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
        $payerAccountNumber,
        Shipper $shipper,
        Recipient $recipient,
        array $packages
    ) {
        $this->shipmentDetails = $shipmentDetails;
        $this->payerAccountNumber = $payerAccountNumber;
        $this->shipper = $shipper;
        $this->recipient = $recipient;
        $this->packages = $packages;
    }

    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    /**
     * @inheritdoc
     */
    public function getPayerAccountNumber()
    {
        return $this->payerAccountNumber;
    }

    /**
     * @inheritdoc
     */
    public function getBillingAccountNumber()
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
    public function setBillingAccountNumber($billingAccountNumber)
    {
        $this->billingAccountNumber = $billingAccountNumber;

        return $this;
    }

    /**
     * @return null|InsuranceInterface
     */
    public function getInsurance()
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
    public function setInsurance(InsuranceInterface $insurance)
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * @return ShipperInterface
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @return RecipientInterface
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @return PackageInterface[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @return null|DryIceInterface
     */
    public function getDryIce()
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
    public function setDryIce(DryIceInterface $dryIce)
    {
        $this->dryIce = $dryIce;

        return $this;
    }
}
