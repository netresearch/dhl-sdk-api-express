<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;

/**
 * The delete shipment request.
 *
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDeleteRequest implements ShipmentDeleteRequestInterface
{
    /**
     * The scheduled pickup date of the shipment to be deleted.
     *
     * @var \DateTime
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
     * @param \DateTime $pickupDate              The scheduled pickup date of the shipment to be deleted
     * @param string $pickupCountry              The country code associated to the origin of the shipment
     * @param string $dispatchConfirmationNumber The confirmation number returned from the original shipment request
     * @param string $requesterName              The delete requester name
     */
    public function __construct(
        \DateTime $pickupDate,
        $pickupCountry,
        $dispatchConfirmationNumber,
        $requesterName
    ) {
        $this->pickupDate                 = $pickupDate;
        $this->pickupCountry              = $pickupCountry;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        $this->requesterName              = $requesterName;
    }

    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    public function getPickupCountry()
    {
        return (string) $this->pickupCountry;
    }

    public function getDispatchConfirmationNumber()
    {
        return (string) $this->dispatchConfirmationNumber;
    }

    public function getRequesterName()
    {
        return (string) $this->requesterName;
    }

    public function getReason()
    {
        return (string) $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
