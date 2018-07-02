<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\RateRequestInterface;

/**
 * Rate Request Mapper.
 *
 * Transform the rate request object into SOAP types suitable for API communication.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequestMapper
{
    /**
     * @param RateRequestInterface $rateRequest
     * @return RateRequestType
     */
    public function map(RateRequestInterface $rateRequest)
    {
        return new RateRequestType();
    }
}
