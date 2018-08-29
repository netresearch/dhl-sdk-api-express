<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

/**
 * Traceable Adapter Interface.
 *
 * Adapters provide tracing capability, i.e. they record their latest requests and responses.
 *
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface TraceableInterface
{
    /**
     * @return string
     */
    public function getLastRequest();

    /**
     * @return string
     */
    public function getLastResponse();
}
