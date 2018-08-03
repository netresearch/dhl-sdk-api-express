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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
        string $pickupDate,
        string $pickupCountry,
        string $dispatchConfirmationNumber,
        string $requesterName
    ) {
        $this->pickupDate                 = $pickupDate;
        $this->pickupCountry              = $pickupCountry;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        $this->requesterName              = $requesterName;
    }

    /**
     * @inheritdoc
     */
    public function getPickupDate(): string
    {
        return $this->pickupDate;
    }

    /**
     * @inheritdoc
     */
    public function getPickupCountry(): string
    {
        return $this->pickupCountry;
    }

    /**
     * @inheritdoc
     */
    public function getDispatchConfirmationNumber(): string
    {
        return $this->dispatchConfirmationNumber;
    }

    /**
     * @inheritdoc
     */
    public function getRequesterName(): string
    {
        return $this->requesterName;
    }

    /**
     * @inheritdoc
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @inheritdoc
     */
    public function setReason(string $reason): ShipmentDeleteRequestInterface
    {
        $this->reason = $reason;
        return $this;
    }
}
