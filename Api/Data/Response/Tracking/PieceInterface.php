<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking;

/**
 * Piece interface.
 *
 * DTO that Tracking information's piece.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface PieceInterface
{
    /**
     * Returns the pieces AWB number
     *
     * @return int
     */
    public function getAwbNumber(): int;

    /**
     * Returns the pieces AWB license plate
     *
     * @return string
     */
    public function getLicense(): string;

    /**
      Returns the pieces events
     *
     * @return PieceEventInterface[]
     */
    public function getPieceEvents(): array;
}
