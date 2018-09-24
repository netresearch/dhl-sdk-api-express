<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Exception\SoapException;

/**
 * Rate Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access. Choose one.
 *
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * @throws \Dhl\Express\Exception\RateRequestException
     * @throws \InvalidArgumentException
     */
    public function collectRates(RateRequestInterface $request);
}
