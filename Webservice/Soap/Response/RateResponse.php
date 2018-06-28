<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Response;

use Dhl\Express\Webservice\Soap\Response\RateResponse\Provider;

/**
 * The rate response. The critical information to derive from this response are the notification codes
 * for the response, the products returned, the estimated charges, and the expected delivery time for the shipment.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateResponse
{
    /**
     * Providers list.
     * 
     * @var array|Provider[]
     */
    private $Provider;

    /**
     * Returns the list of providers.
     * 
     * @return array|Provider[]
     */
    public function getProvider(): array
    {
        return $this->Provider;
    }
}
