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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * @param $description
     */
    public function __construct(string $date, string $time, string $locationDescription, $description)
    {
        $this->date = $date;
        $this->time = $time;
        $this->locationDescription = $locationDescription;
        $this->description = $description;
    }

    /**
     * Returns the event's date
     *
     * @return int
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Returns the event's location description
     *
     * @return string
     */
    public function getLocationDescription(): string
    {
        return $this->locationDescription;
    }

    /**
     * Returns the event's description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Returns the event's time
     *
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }
}
