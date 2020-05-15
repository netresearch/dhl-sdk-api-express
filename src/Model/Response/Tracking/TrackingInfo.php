<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Tracking;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentEventInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfoInterface;
use Dhl\Express\Webservice\Soap\Type\Tracking\ConditionCollection;

/**
 * TrackingInfo.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingInfo implements TrackingInfoInterface
{
    /**
     * @var string
     */
    private $awbNumber;

    /**
     * @var string
     */
    private $awbStatus;
    /**
     * @var ConditionCollection
     */
    private $awbConditions;

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
     * @param string                   $awbNumber
     * @param string                   $awbStatus
     * @param ConditionCollection      $awbConditions
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param ShipmentEventInterface[] $shipmentEvents
     * @param PieceInterface[]         $pieces
     */
    public function __construct(
        $awbNumber,
        $awbStatus,
        $awbConditions,
        ShipmentDetailsInterface $shipmentDetails,
        array $shipmentEvents,
        array $pieces
    ) {
        $this->awbNumber = $awbNumber;
        $this->awbStatus = $awbStatus;
        $this->awbConditions = $awbConditions;
        $this->shipmentDetails = $shipmentDetails;
        $this->shipmentEvents = $shipmentEvents;
        $this->pieces = $pieces;
    }

    public function getAwbNumber()
    {
        return (string) $this->awbNumber;
    }

    public function getAwbStatus()
    {
        return (string) $this->awbStatus;
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

    public function getAwbConditions()
    {
        return $this->awbConditions;
    }

    public function setAwbConditions($awbConditions)
    {
        $this->awbConditions = $awbConditions;
    }
}
