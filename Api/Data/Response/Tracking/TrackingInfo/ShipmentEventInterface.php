<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking\TrackingInfo;

/**
 * ShipmentEvent interface.
 *
 * DTO that Tracking information's shipment event.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentEventInterface
{
    /**
     * Returns the event's date
     *
     * @return string
     */
    public function getDate();

    /**
     * Returns the event's time
     *
     * @return string
     */
    public function getTime();

    /**
     * Returns the event's location description
     *
     * @return string
     */
    public function getLocationDescription();

    /**
     * Returns the event's description
     *
     * @return string
     */
    public function getDescription();
}
