<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider;

/**
 * Soap Rate Response. The critical information to derive from this response are the notification codes
 * for the response, the products returned, the estimated charges, and the expected delivery time for the shipment.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapRateResponse
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
     * @return array|Provider[] Array of Provider
     */
    public function getProvider()
    {
        return $this->Provider;
    }
}
