<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentDetailsInterface;

/**
 * Shipment details class.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDetails implements ShipmentDetailsInterface
{
    /**
     * @var string
     */
    private $shipperName;

    /**
     * @var string
     */
    private $originDescription;

    /**
     * @var string
     */
    private $consigneeName;

    /**
     * @var string
     */
    private $destinationDescription;

    /**
     * @var string
     */
    private $shipmentDate;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var string|null
     */
    private $estimatedDeliveryDate;

    /**
     * ShipmentDetails constructor.
     *
     * @param string $shipperName
     * @param string $originDescription
     * @param string $consigneeName
     * @param string $destinationDescription
     * @param string $shipmentDate
     * @param float  $weight
     * @param string|null $estimatedDeliveryDate
     */
    public function __construct(
        $shipperName,
        $originDescription,
        $consigneeName,
        $destinationDescription,
        $shipmentDate,
        $weight,
        $estimatedDeliveryDate = null
    ) {
        $this->shipperName = $shipperName;
        $this->originDescription = $originDescription;
        $this->consigneeName = $consigneeName;
        $this->destinationDescription = $destinationDescription;
        $this->shipmentDate = $shipmentDate;
        $this->weight = $weight;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
    }

    public function getShipperName()
    {
        return (string) $this->shipperName;
    }

    public function getOriginDescription()
    {
        return (string) $this->originDescription;
    }

    public function getConsigneeName()
    {
        return (string) $this->consigneeName;
    }

    public function getDestinationDescription()
    {
        return (string) $this->destinationDescription;
    }

    public function getShipmentDate()
    {
        return (string) $this->shipmentDate;
    }

    public function getWeight()
    {
        return (float) $this->weight;
    }

    public function getEstimatedDeliveryDate()
    {
        return (string) $this->estimatedDeliveryDate;
    }
}
