<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\Rate\PackageInterface;
use Dhl\Express\Api\Data\Request\Rate\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\Rate\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\Rate\ShipperAddressInterface;

/**
 * Rate Request.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateRequest implements RateRequestInterface
{
    /**
     * @var ShipperAddressInterface
     */
    private $shipperAddress;

    /**
     * @var string
     */
    private $shipperAccountNumber;

    /**
     * @var RecipientAddressInterface
     */
    private $recipientAddress;

    /**
     * @var ShipmentDetailsInterface
     */
    private $shipmentDetails;

    /**
     * @var PackageInterface[]
     */
    private $packages;

    /**
     * @var null|InsuranceInterface
     */
    private $insurance;

    /**
     * RateRequest constructor.
     *
     * @param ShipperAddressInterface   $shipperAddress
     * @param string                    $shipperAccountNumber
     * @param RecipientAddressInterface $recipientAddress
     * @param ShipmentDetailsInterface  $shipmentDetails
     * @param PackageInterface[]        $packages
     * @param InsuranceInterface|null   $insurance
     */
    public function __construct(
        ShipperAddressInterface $shipperAddress,
        $shipperAccountNumber,
        RecipientAddressInterface $recipientAddress,
        ShipmentDetailsInterface $shipmentDetails,
        array $packages,
        InsuranceInterface $insurance = null
    ) {
        $this->shipperAddress       = $shipperAddress;
        $this->shipperAccountNumber = $shipperAccountNumber;
        $this->recipientAddress     = $recipientAddress;
        $this->shipmentDetails      = $shipmentDetails;
        $this->packages             = $packages;
        $this->insurance            = $insurance;
    }

    public function getShipperAddress()
    {
        return $this->shipperAddress;
    }

    public function getShipperAccountNumber()
    {
        return (string) $this->shipperAccountNumber;
    }

    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    public function getPackages()
    {
        return $this->packages;
    }

    public function getInsurance()
    {
        return $this->insurance;
    }
}
