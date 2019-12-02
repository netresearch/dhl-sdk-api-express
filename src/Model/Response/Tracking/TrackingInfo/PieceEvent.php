<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceEventInterface;

/**
 * Piece event class.
 *
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

    public function getDate()
    {
        return (int) $this->date;
    }

    public function getCode()
    {
        return (string) $this->code;
    }

    public function getDescription()
    {
        return (string) $this->description;
    }
}
