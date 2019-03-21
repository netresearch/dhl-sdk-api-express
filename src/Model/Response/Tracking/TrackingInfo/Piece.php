<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Tracking\TrackingInfo;

use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceEventInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfo\PieceInterface;

/**
 * Tracking piece.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Piece implements PieceInterface
{
    /**
     * AWB number
     *
     * @var int
     */
    private $awbNumber;

    /**
     * License
     *
     * @var string
     */
    private $license;

    /**
     * Piece events
     *
     * @var PieceEventInterface[]
     */
    private $pieceEvents;

    /**
     * Piece constructor.
     *
     * @param int                   $awbNumber
     * @param string                $license
     * @param PieceEventInterface[] $pieceEvents
     */
    public function __construct($awbNumber, $license, array $pieceEvents)
    {
        $this->awbNumber = $awbNumber;
        $this->license = $license;
        $this->pieceEvents = $pieceEvents;
    }

    /**
     * Returns the AWB number
     *
     * @return int
     */
    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    /**
     * Returns the license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Returns the piece events
     *
     * @return PieceEventInterface[]
     */
    public function getPieceEvents()
    {
        return $this->pieceEvents;
    }
}
