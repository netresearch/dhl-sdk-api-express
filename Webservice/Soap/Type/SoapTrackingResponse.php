<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingResponseBase;

/**
 * The tracking response.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapTrackingResponse
{
    /**
     * @var TrackingResponseBase
     */
    protected $trackingResponse;

    /**
     * @return TrackingResponseBase
     */
    public function getTrackingResponse()
    {
        return $this->trackingResponse;
    }

    /**
     * @param TrackingResponseBase $trackingResponse
     * @return self
     */
    public function setTrackingResponse(TrackingResponseBase $trackingResponse)
    {
        $this->trackingResponse = $trackingResponse;
        return $this;
    }
}
