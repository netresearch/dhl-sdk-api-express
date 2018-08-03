<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Response\Tracking\MessageInterface;
use Dhl\Express\Api\Data\Response\Tracking\PieceInterface;
use Dhl\Express\Api\Data\Response\Tracking\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Response\Tracking\ShipmentEventInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;

/**
 * Tracking Request.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingResponse implements TrackingResponseInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var int
     */
    private $awbNumber;

    /**
     * @var string
     */
    private $awbStatus;

    /**
     * @var ShipmentDetailsInterface
     */
    private $shipmentDetails;

    /**
     * @var ShipmentEventInterface[]
     */
    private $shipmentEvents;

    /**
     * @var PieceInterface[]
     */
    private $pieces;

    /**
     * TrackingResponse constructor.
     * @param MessageInterface $message
     * @param int $awbNumber
     * @param string $awbStatus
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param ShipmentEventInterface[] $shipmentEvents
     * @param PieceInterface[] $pieces
     */
    public function __construct(
        MessageInterface $message,
        int $awbNumber,
        string $awbStatus,
        ShipmentDetailsInterface $shipmentDetails,
        array $shipmentEvents,
        array $pieces
    ) {
        $this->message = $message;
        $this->awbNumber = $awbNumber;
        $this->awbStatus = $awbStatus;
        $this->shipmentDetails = $shipmentDetails;
        $this->shipmentEvents = $shipmentEvents;
        $this->pieces = $pieces;
    }


    public function getMessage(): MessageInterface
    {
        return $this->message;
    }

    public function getAwbNumber(): int
    {
        return $this->awbNumber;
    }

    public function getAwbStatus(): string
    {
        return $this->awbStatus;
    }

    public function getShipmentDetails(): ShipmentDetailsInterface
    {
        return $this->shipmentDetails;
    }

    public function getShipmentEvents(): array
    {
        return $this->shipmentEvents;
    }

    public function getPieces(): array
    {
        return $this->pieces;
    }
}
