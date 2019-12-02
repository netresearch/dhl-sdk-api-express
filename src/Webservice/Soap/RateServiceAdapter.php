<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Adapter\RateServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;
use SoapClient;
use SoapFault;

/**
 * Rate Service SOAP Adapter.
 *
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class RateServiceAdapter implements RateServiceAdapterInterface, TraceableInterface
{
    /**
     * @var SoapClient
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
     *
     * @param SoapClient         $client
     * @param RateRequestMapper  $requestMapper
     * @param RateResponseMapper $responseMapper
     */
    public function __construct(
        SoapClient $client,
        RateRequestMapper $requestMapper,
        RateResponseMapper $responseMapper
    ) {
        $this->client = $client;
        $this->requestMapper = $requestMapper;
        $this->responseMapper = $responseMapper;
    }

    public function collectRates(RateRequestInterface $request)
    {
        try {
            $soapRequest = $this->requestMapper->map($request);
        } catch (\Exception $e) {
            throw new RateRequestException($e->getMessage());
        }

        try {
            $soapResponse = $this->client->__soapCall('getRateRequest', [$soapRequest]);
        } catch (SoapFault $e) {
            throw new SoapException(sprintf('Could not access SOAP webservice: %s', $e->getMessage()), 0, $e);
        }

        return $this->responseMapper->map($soapResponse);
    }

    public function getLastRequest()
    {
        $lastRequest = sprintf(
            "%s\n%s",
            $this->client->__getLastRequestHeaders(),
            $this->client->__getLastRequest()
        );

        return $lastRequest;
    }

    public function getLastResponse()
    {
        $lastResponse = sprintf(
            "%s\n%s",
            $this->client->__getLastResponseHeaders(),
            $this->client->__getLastResponse()
        );

        return $lastResponse;
    }
}
