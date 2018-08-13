<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Adapter\RateServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;

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
     * @var Client
     */
    private $client;

    /**
     * @var RateRequestMapper
     */
    private $requestMapper;

    /**
     * @var RateResponseMapper
     */
    private $responseMapper;

    /**
     * RateServiceAdapter constructor.
     * @param Client $client
     * @param RateRequestMapper $requestMapper
     * @param RateResponseMapper $responseMapper
     */
    public function __construct(
        Client $client,
        RateRequestMapper $requestMapper,
        RateResponseMapper $responseMapper
    ) {
    
        $this->client = $client;
        $this->requestMapper = $requestMapper;
        $this->responseMapper = $responseMapper;
    }

    /**
     * @param RateRequestInterface $request
     * @return RateResponseInterface
     * @throws SoapException
     * @throws \Dhl\Express\Exception\RateRequestException
     */
    public function collectRates(RateRequestInterface $request): RateResponseInterface
    {
        $soapRequest = $this->requestMapper->map($request);

        try {
            $soapResponse = $this->client->__soapCall('getRateRequest', [$soapRequest]);
        } catch (\SoapFault $e) {
            throw new SoapException('Could not access SOAP webservice.');
        }

        return $this->responseMapper->map($soapResponse);
    }

    /**
     * @return string
     */
    public function getLastRequest(): string
    {
        $lastRequest = sprintf(
            "%s\n%s",
            $this->client->__getLastRequestHeaders(),
            $this->client->__getLastRequest()
        );

        return $lastRequest;
    }

    /**
     * @return string
     */
    public function getLastResponse(): string
    {
        $lastResponse = sprintf(
            "%s\n%s",
            $this->client->__getLastResponseHeaders(),
            $this->client->__getLastResponse()
        );

        return $lastResponse;
    }
}
