<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\Request\Tracking\MessageInterface;
use Dhl\Express\Api\Data\TrackingRequestInterface;

/**
 * TrackingRequest Class.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingRequest implements TrackingRequestInterface
{
    /**
     * @var MessageInterface
     */
    private $message;

    /**
     * @var string[]
     */
    private $awbNumber;

    /**
     * @var string
     */
    private $levelOfDetails;

    /**
     * @var string
     */
    private $piecesEnabled;

    /**
     * @var bool
     */
    private $estimatedDeliveryDate;

    /**
     * TrackingRequest constructor.
     *
     * @param MessageInterface $message
     * @param string[]         $awbNumber
     * @param string           $levelOfDetails
     * @param string           $piecesEnabled
     * @param bool             $estimatedDeliveryDate
     */
    public function __construct(
        MessageInterface $message,
        array $awbNumber,
        $levelOfDetails,
        $piecesEnabled,
        $estimatedDeliveryDate
    ) {
        $this->message = $message;
        $this->awbNumber = $awbNumber;
        $this->levelOfDetails = $levelOfDetails;
        $this->piecesEnabled = $piecesEnabled;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAwbNumber()
    {
        return $this->awbNumber;
    }

    public function getLevelOfDetails()
    {
        return (string) $this->levelOfDetails;
    }

    public function getPiecesEnabled()
    {
        return (string) $this->piecesEnabled;
    }

    public function isEstimatedDeliveryDateRequested()
    {
        return (bool) $this->estimatedDeliveryDate;
    }
}
