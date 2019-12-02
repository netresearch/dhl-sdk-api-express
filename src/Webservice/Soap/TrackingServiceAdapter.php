<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Exception\TrackingRequestException;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Adapter\TrackingServiceAdapterInterface;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingResponseMapper;

/**
 * Tracking Service SOAP Adapter.
 *
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class TrackingServiceAdapter implements TrackingServiceAdapterInterface, TraceableInterface
{
    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * @var TrackingRequestMapper
     */
    private $requestMapper;

    /**
     * @var TrackingResponseMapper
     */
    private $responseMapper;

    /**
     * TrackingServiceAdapter constructor.
     *
     * @param \SoapClient            $client
     * @param TrackingRequestMapper  $requestMapper
     * @param TrackingResponseMapper $responseMapper
     */
    public function __construct(
        \SoapClient $client,
        TrackingRequestMapper $requestMapper,
        TrackingResponseMapper $responseMapper
    ) {
        $this->client         = $client;
        $this->requestMapper  = $requestMapper;
        $this->responseMapper = $responseMapper;
    }

    public function getTrackingInformation(TrackingRequestInterface $request)
    {
        try {
            $soapRequest = $this->requestMapper->map($request);
        } catch (\Exception $e) {
            throw new TrackingRequestException($e->getMessage());
        }

        try {
            $soapResponse = $this->client->__soapCall('trackShipmentRequest', [$soapRequest]);
        } catch (\SoapFault $e) {
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
