<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Response\Tracking\MessageInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Model\Response\Tracking\TrackingInfo;

/**
 * Tracking Response.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingResponse implements TrackingResponseInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var TrackingInfo[]
     */
    private $trackingInfos;

    /**
     * TrackingResponse constructor.
     * @param MessageInterface $message
     * @param TrackingInfo[] $trackingInfos
     */
    public function __construct(MessageInterface $message, array $trackingInfos)
    {
        $this->message = $message;
        $this->trackingInfos = $trackingInfos;
    }

    /**
     * @return MessageInterface
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return MessageInterface[]
     */
    public function getTrackingInfos()
    {
        return $this->trackingInfos;
    }
}
