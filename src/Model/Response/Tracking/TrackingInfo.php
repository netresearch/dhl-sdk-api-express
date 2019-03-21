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
     *
     * @param int                      $awbNumber
     * @param string                   $awbStatus
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param ShipmentEventInterface[] $shipmentEvents
     * @param PieceInterface[]         $pieces
     */
    public function __construct(
        $awbNumber,
        $awbStatus,
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

    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    public function getAwbStatus()
    {
        return $this->awbStatus;
    }

    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }

    public function getShipmentEvents()
    {
        return $this->shipmentEvents;
    }

    public function getPieces()
    {
        return $this->pieces;
    }
}
