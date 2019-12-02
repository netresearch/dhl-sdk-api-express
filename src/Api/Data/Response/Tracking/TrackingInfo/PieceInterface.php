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
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface PieceInterface
{
    /**
     * Returns the pieces AWB number
     *
     * @return string
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
