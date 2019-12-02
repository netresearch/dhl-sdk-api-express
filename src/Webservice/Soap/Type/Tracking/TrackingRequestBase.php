<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * TrackingRequestBase class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingRequestBase
{
    /**
     * @var TrackingRequest
     */
    protected $TrackingRequest;

    /**
     * @param TrackingRequest $TrackingRequest
     */
    public function __construct(TrackingRequest $TrackingRequest)
    {
        $this->TrackingRequest = $TrackingRequest;
    }

    /**
     * @return TrackingRequest
     */
    public function getTrackingRequest()
    {
        return $this->TrackingRequest;
    }

    /**
     * @param TrackingRequest $TrackingRequest
     * @return self
     */
    public function setTrackingRequest(TrackingRequest $TrackingRequest)
    {
        $this->TrackingRequest = $TrackingRequest;

        return $this;
    }
}
