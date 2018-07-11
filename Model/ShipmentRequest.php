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
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param string $payerAccountNumber
     * @param InsuranceInterface $insurance
     * @param Shipper $shipper
     * @param Recipient $recipient
     * @param array $packages
     * @param DryIceInterface $dryIce
     */
    public function __construct(
        ShipmentDetailsInterface $shipmentDetails,
        string $payerAccountNumber,
        InsuranceInterface $insurance,
        Shipper $shipper,
        Recipient $recipient,
        array $packages,
        DryIceInterface $dryIce
    ) {
        $this->shipmentDetails = $shipmentDetails;
        $this->payerAccountNumber = $payerAccountNumber;
        $this->insurance = $insurance;
        $this->shipper = $shipper;
        $this->recipient = $recipient;
        $this->packages = $packages;
        $this->dryIce = $dryIce;
    }

    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails(): ShipmentDetailsInterface
    {
        return $this->shipmentDetails;
    }

    /**
     * @return string
     */
    public function getPayerAccountNumber(): string
    {
        return $this->payerAccountNumber;
    }

    /**
     * @return InsuranceInterface
     */
    public function getInsurance(): InsuranceInterface
    {
        return $this->insurance;
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
     * @return DryIceInterface
     */
    public function getDryIce(): DryIceInterface
    {
        return $this->dryIce;
    }
}
