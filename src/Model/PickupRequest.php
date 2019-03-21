<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\PickupRequestInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\Pickup\ShipperInterface;
use Dhl\Express\Api\Data\Request\RecipientInterface;

/**
 * Pickup Request.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PickupRequest implements PickupRequestInterface
{
    /**
     * @var int
     */
    private $pickupTimestamp;

    /**
     * @var string
     */
    private $serviceType;

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var string[]
     */
    private $commodities;

    /**
     * @var ShipperInterface
     */
    private $shipper;

    /**
     * @var RecipientInterface
     */
    private $recipient;

    /**
     * @var PackageInterface[]
     */
    private $packages;

    /**
     * PickupRequest constructor.
     *
     * @param int                $pickupTimestamp
     * @param string             $serviceType
     * @param string             $paymentType
     * @param string[]           $commodities
     * @param ShipperInterface   $shipper
     * @param RecipientInterface $recipient
     * @param array              $packages
     */
    public function __construct(
        $pickupTimestamp,
        $serviceType,
        $paymentType,
        array $commodities,
        ShipperInterface $shipper,
        RecipientInterface $recipient,
        array $packages
    ) {
        $this->pickupTimestamp = $pickupTimestamp;
        $this->serviceType     = $serviceType;
        $this->paymentType     = $paymentType;
        $this->commodities     = $commodities;
        $this->shipper         = $shipper;
        $this->recipient       = $recipient;
        $this->packages        = $packages;
    }

    /**
     * Returns the pickup timestamp.
     *
     * @return int
     */
    public function getPickupTimestamp()
    {
        return $this->pickupTimestamp;
    }

    /**
     * Returns the service type.
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Returns the payment type.
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Returns the commodity's description.
     *
     * @return string
     */
    public function getCommoditiesDescription()
    {
        return $this->commodities;
    }

    /**
     * Returns the shipper.
     *
     * @return ShipperInterface
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Returns the recipient.
     *
     * @return RecipientInterface
     */
    public function getSRecipient()
    {
        return $this->recipient;
    }

    /**
     * Returns the packages.
     *
     * @return PackageInterface[]
     */
    public function getPackages()
    {
        return $this->packages;
    }
}
