<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequestBase;

/**
 * The tracking request.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapTrackingRequest
{
    /**
     * @var TrackingRequestBase
     */
    protected $trackingRequest;

    /**
     * @return TrackingRequestBase
     */
    public function getTrackingRequest()
    {
        return $this->trackingRequest;
    }

    /**
     * @param TrackingRequestBase $trackingRequest
     * @return self
     */
    public function setTrackingRequest(TrackingRequestBase $trackingRequest)
    {
        $this->trackingRequest = $trackingRequest;
        return $this;
    }
}
