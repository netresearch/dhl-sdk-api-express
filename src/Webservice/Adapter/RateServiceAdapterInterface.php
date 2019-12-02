<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Exception\SoapException;

/**
 * Rate Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access. Choose one.
 *
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface RateServiceAdapterInterface
{
    /**
     * @param RateRequestInterface $request
     *
     * @return RateResponseInterface
     *
     * @throws SoapException
     * @throws RateRequestException
     */
    public function collectRates(RateRequestInterface $request);
}
