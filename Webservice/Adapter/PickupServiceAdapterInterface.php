<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

use Dhl\Express\Api\Data\PickupRequestInterface;
use Dhl\Express\Api\Data\PickupResponseInterface;

/**
 * Rate Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access. Choose one.
 *
 * @package  Dhl\Express\Api
 * @author   Paul Siedler <paul.siedler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface PickupServiceAdapterInterface
{
    /**
     * @param PickupRequestInterface $request
     * @return PickupResponseInterface
     * @throws \InvalidArgumentException
     */
    public function createPickup(PickupRequestInterface $request);
}
