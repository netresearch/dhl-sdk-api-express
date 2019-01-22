<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Exception\SoapException;

/**
 * Rate Service Interface.
 *
 * Access the DHL Express Global Web Services shipment operation "RateRequest".
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RateServiceInterface
{
    /**
     * @param RateRequestInterface $request
     *
     * @return RateResponseInterface
     *
     * @throws RateRequestException
     * @throws SoapException
     */
    public function collectRates(RateRequestInterface $request);
}
