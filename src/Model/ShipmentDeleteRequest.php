<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;

/**
 * The delete shipment request.
 *
 * @package  Dhl\Express\Model
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDeleteRequest implements ShipmentDeleteRequestInterface
{
    /**
     * The scheduled pickup date of the shipment to be deleted.
     *
     * @var string
     */
    private $pickupDate;

    /**
     * The country code associated to the origin of the shipment.
     *
     * @var string
     */
    private $pickupCountry;

    /**
     * The confirmation number returned from the original shipment request.
     *
     * @var string
     */
    private $dispatchConfirmationNumber;

    /**
     * The delete requester name.
     *
     * @var string
     */
    private $requesterName;

    /**
     * The reason code.
     *
     * @var null|string
     */
    private $reason;

    /**
     * Constructor.
     *
     * @param string $pickupDate                 The scheduled pickup date of the shipment to be deleted
     * @param string $pickupCountry              The country code associated to the origin of the shipment
     * @param string $dispatchConfirmationNumber The confirmation number returned from the original shipment request
     * @param string $requesterName              The delete requester name
     */
    public function __construct(
        $pickupDate,
        $pickupCountry,
        $dispatchConfirmationNumber,
        $requesterName
    ) {
        $this->pickupDate                 = $pickupDate;
        $this->pickupCountry              = $pickupCountry;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        $this->requesterName              = $requesterName;
    }

    /**
     * @inheritdoc
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @inheritdoc
     */
    public function getPickupCountry()
    {
        return $this->pickupCountry;
    }

    /**
     * @inheritdoc
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->dispatchConfirmationNumber;
    }

    /**
     * @inheritdoc
     */
    public function getRequesterName()
    {
        return $this->requesterName;
    }

    /**
     * @inheritdoc
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @inheritdoc
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
