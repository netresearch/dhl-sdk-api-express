<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentDetailsInterface;

/**
 * Shipping details class.
 *
 * @package  Dhl\Express\Model
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
     * @var string
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
     * @param string $estimatedDeliveryDate
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

    /**
     * Returns the shipper's name
     *
     * @return string
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * Returns the consignee's name
     *
     * @return string
     */
    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * Returns the shipment's date
     *
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * @return string
     */
    public function getOriginDescription()
    {
        return $this->originDescription;
    }

    /**
     * @return string
     */
    public function getDestinationDescription()
    {
        return $this->destinationDescription;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDeliveryDate;
    }
}
