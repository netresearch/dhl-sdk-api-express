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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    private $consigneeName;

    /**
     * @var int
     */
    private $shipmentDate;

    /**
     * ShipmentDetails constructor.
     * @param string $shipperName
     * @param string $consigneeName
     * @param int $shipmentDate
     */
    public function __construct(string $shipperName, string $consigneeName, int $shipmentDate)
    {
        $this->shipperName = $shipperName;
        $this->consigneeName = $consigneeName;
        $this->shipmentDate = $shipmentDate;
    }

    /**
     * Returns the shipper's name
     *
     * @return string
     */
    public function getShipperName(): string
    {
        return $this->shipperName;
    }

    /**
     * Returns the consignee's name
     *
     * @return string
     */
    public function getConsigneeName(): string
    {
        return $this->consigneeName;
    }

    /**
     * Returns the shipment's date
     *
     * @return int
     */
    public function getShipmentDate(): int
    {
        return $this->shipmentDate;
    }
}
