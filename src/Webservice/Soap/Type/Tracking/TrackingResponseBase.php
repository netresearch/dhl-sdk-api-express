<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingResponseBase class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
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
