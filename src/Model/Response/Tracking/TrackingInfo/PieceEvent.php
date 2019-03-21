<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceEventInterface;

/**
 * Piece event class.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PieceEvent implements PieceEventInterface
{
    /**
     * Event date
     *
     * @var int
     */
    private $date;

    /**
     * Event code
     *
     * @var string
     */
    private $code;

    /**
     * Event description
     *
     * @var string
     */
    private $description;

    /**
     * PieceEvent constructor.
     *
     * @param int    $date
     * @param string $code
     * @param string $description
     */
    public function __construct($date, $code, $description)
    {
        $this->date = $date;
        $this->code = $code;
        $this->description = $description;
    }

    /**
     * Returns the event's date
     *
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Returns the event's code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
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
}
