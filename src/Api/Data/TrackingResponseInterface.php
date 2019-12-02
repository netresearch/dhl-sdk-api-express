<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Response\Tracking\MessageInterface;
use Dhl\Express\Api\Data\Response\Tracking\TrackingInfoInterface;

/**
 * Rate Response Interface.
 *
 * DTO that carries relevant data for processing the tracking result.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface TrackingResponseInterface
{
    /**
     * Returns the message.
     *
     * @return MessageInterface
     */
    public function getMessage();

    /**
     * Returns the tracking information.
     *
     * @return TrackingInfoInterface[]
     */
    public function getTrackingInfos();
}
