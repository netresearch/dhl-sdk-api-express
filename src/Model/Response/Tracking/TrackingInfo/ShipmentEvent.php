<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\ShipmentEventInterface;

/**
 * Shipping event class.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentEvent implements ShipmentEventInterface
{
    /**
     * Event date
     *
     * @var string
     */
    private $date;

    /**
     * Event time
     *
     * @var string
     */
    private $time;

    /**
     * Event location description
     *
     * @var string
     */
    private $locationDescription;

    /**
     * Event description
     *
     * @var $description
     */
    private $description;

    /**
     * ShipmentEvent constructor.
     *
     * @param string $date
     * @param string $time
     * @param string $locationDescription
     * @param        $description
     */
    public function __construct($date, $time, $locationDescription, $description)
    {
        $this->date = $date;
        $this->time = $time;
        $this->locationDescription = $locationDescription;
        $this->description = $description;
    }

    /**
     * Returns the event's date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Returns the event's location description
     *
     * @return string
     */
    public function getLocationDescription()
    {
        return $this->locationDescription;
    }

    /**
     * Returns the event's description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the event's time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
}
