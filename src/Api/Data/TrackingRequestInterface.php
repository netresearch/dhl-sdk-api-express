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
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface TrackingRequestInterface
{
    /**
     * Returns the tracking information's message
     *
     * @return MessageInterface
     */
    public function getMessage();

    /**
     * Returns the tracking information's AWB numbers
     *
     * @return string[]
     */
    public function getAwbNumber();

    /**
     * Returns the tracking information's level of details
     *
     * @return string
     */
    public function getLevelOfDetails();

    /**
     * Returns the tracking information's enabled pieces code
     *
     * @return string
     */
    public function getPiecesEnabled();

    /**
     * Should the response return the estimated delivery date, if available
     *
     * @return bool
     */
    public function isEstimatedDeliveryDateRequested();
}
