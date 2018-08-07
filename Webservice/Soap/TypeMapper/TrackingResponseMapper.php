<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingResponse;

/**
 * Tracking Response Mapper.
 *
 * Transform the SOAP response type into tracking objects suitable for further processing.
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingResponseMapper
{
    /**
     * @param SoapTrackingResponse $trackingResponse
     * @return TrackingResponseInterface
     */
    public function map(SoapTrackingResponse $trackingResponse): TrackingResponseInterface
    {
        /**
         * @Todo: Implement mapping
         */
    }
}
