<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Converter;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Webservice\Soap\Request\RateRequest;
use \Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * Rate Service Converter Interface
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RateServiceConverterInterface
{
    /**
     * @param RateRequestInterface $rateRequest
     * @return RateRequest
     */
    public function convertRequestToSoap(RateRequestInterface $rateRequest): RateRequest;

    /**
     * @param RateResponse $rateResponse
     * @return RateResponseInterface
     */
    public function convertResponseToApi(RateResponse $rateResponse): RateResponseInterface;
}
