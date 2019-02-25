<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingResponseBase class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingResponseBase
{
    /**
     * @var TrackingResponse
     */
    protected $TrackingResponse;

    /**
     * @param TrackingResponse $TrackingResponse
     */
    public function __construct(TrackingResponse $TrackingResponse)
    {
        $this->TrackingResponse = $TrackingResponse;
    }

    /**
     * @return TrackingResponse
     */
    public function getTrackingResponse()
    {
        return $this->TrackingResponse;
    }

    /**
     * @param TrackingResponse $TrackingResponse
     * @return self
     */
    public function setTrackingResponse(TrackingResponse $TrackingResponse)
    {
        $this->TrackingResponse = $TrackingResponse;

        return $this;
    }
}
