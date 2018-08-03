<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\Tracking\MessageInterface;

/**
 * TrackingRequestInterface.
 *
 * DTO that carries relevant data for requesting tracking information.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface TrackingRequestInterface
{
    /**
     * Returns the tracking information's message
     *
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface;

    /**
     * Returns the tracking information's AWB numbers
     *
     * @return string[]
     */
    public function getAwbNumber(): array;

    /**
     * Returns the tracking information's level of details
     *
     * @return string
     */
    public function getLevelOfDetails(): string;

    /**
     * Returns the tracking information's enabled pieces code
     *
     * @return string
     */
    public function getPiecesEnabled(): string;
}
