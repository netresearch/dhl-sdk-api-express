<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Webservice\Adapter\RateServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;

/**
 * Rate Service SOAP Adapter.
 *
 * @package Dhl\Express\Webservice
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class RateServiceAdapter implements RateServiceAdapterInterface, TraceableInterface
{
    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * @param RateRequestInterface $request
     * @return RateResponseInterface
     */
    public function collectRates(RateRequestInterface $request)
    {
        // (1) convert RateRequestInterface to \Dhl\Express\Webservice\Soap\Request\RateRequest
        $soapRequest = $request;

        // (2) perform soap call
        $soapResponse = $this->client->__soapCall('getRateRequest', [$soapRequest]);

        // (3) convert \Dhl\Express\Webservice\Soap\Response\RateResponse to \Dhl\Express\Api\Data\RateResponseInterface
        $response = $soapResponse;
        return $response;
    }

    /**
     * @return string
     */
    public function getLastRequest(): string
    {
        // todo(nr): also return request headers
        return $this->client->__getLastRequest();
    }

    /**
     * @return string
     */
    public function getLastResponse(): string
    {
        // todo(nr): also return response headers
        return $this->client->__getLastResponse();
    }
}
