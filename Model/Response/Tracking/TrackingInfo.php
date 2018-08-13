<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Tracking;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentEventInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfoInterface;

/**
 * TrackingInfo.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingInfo implements TrackingInfoInterface
{
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
     * TrackingInfo constructor.
     * @param int $awbNumber
     * @param string $awbStatus
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param ShipmentEventInterface[] $shipmentEvents
     * @param PieceInterface[] $pieces
     */
    public function __construct(
        int $awbNumber,
        string $awbStatus,
        ShipmentDetailsInterface $shipmentDetails,
        array $shipmentEvents,
        array $pieces
    ) {
        $this->awbNumber = $awbNumber;
        $this->awbStatus = $awbStatus;
        $this->shipmentDetails = $shipmentDetails;
        $this->shipmentEvents = $shipmentEvents;
        $this->pieces = $pieces;
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
