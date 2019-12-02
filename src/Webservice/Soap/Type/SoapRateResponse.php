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
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapRateResponse
{
    /**
     * Providers list.
     *
     * @var Provider|null
     */
    private $Provider;

    /**
     * Returns provider.
     *
     * @return Provider|null
     */
    public function getProvider()
    {
        return $this->Provider;
    }
}
