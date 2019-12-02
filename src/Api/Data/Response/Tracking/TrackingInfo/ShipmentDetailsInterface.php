<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking\TrackingInfo;

/**
 * ShipmentInfo interface.
 *
 * DTO that Tracking information's shipment info.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentDetailsInterface
{
    /**
     * Returns the shipper's name
     *
     * @return string
     */
    public function getShipperName();

    /**
     * @return string
     */
    public function getOriginDescription();

    /**
     * Returns the consignee's name
     *
     * @return string
     */
    public function getConsigneeName();

    /**
     * @return string
     */
    public function getDestinationDescription();

    /**
     * Returns the shipment's date
     *
     * @return string
     */
    public function getShipmentDate();

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @return string
     */
    public function getEstimatedDeliveryDate();
}
