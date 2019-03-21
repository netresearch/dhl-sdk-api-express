<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking\TrackingInfo;

/**
 * Piece interface.
 *
 * DTO that Tracking information's piece.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface PieceInterface
{
    /**
     * Returns the pieces AWB number
     *
     * @return int
     */
    public function getAwbNumber();

    /**
     * Returns the pieces AWB license plate
     *
     * @return string
     */
    public function getLicense();

    /**
      Returns the pieces events
     *
     * @return PieceEventInterface[]
     */
    public function getPieceEvents();
}
