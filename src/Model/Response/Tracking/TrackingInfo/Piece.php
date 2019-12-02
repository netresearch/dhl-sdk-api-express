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
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Piece implements PieceInterface
{
    /**
     * AWB number
     *
     * @var string
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
     * @param string $awbNumber
     * @param string $license
     * @param PieceEventInterface[] $pieceEvents
     */
    public function __construct($awbNumber, $license, array $pieceEvents)
    {
        $this->awbNumber = $awbNumber;
        $this->license = $license;
        $this->pieceEvents = $pieceEvents;
    }

    public function getAwbNumber()
    {
        return (string) $this->awbNumber;
    }

    public function getLicense()
    {
        return (string) $this->license;
    }

    public function getPieceEvents()
    {
        return $this->pieceEvents;
    }
}
