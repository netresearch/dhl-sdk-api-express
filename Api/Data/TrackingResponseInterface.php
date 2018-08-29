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
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * Returns the tacking informations.
     *
     * @return TrackingInfoInterface[]
     */
    public function getTrackingInfos();
}
