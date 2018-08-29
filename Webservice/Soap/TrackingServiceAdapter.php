<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Adapter\TrackingServiceAdapterInterface;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingResponseMapper;

/**
 * Tracking Service SOAP Adapter.
 *
 * @package Dhl\Express\Webservice
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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

    /**
     * @param TrackingRequestInterface $request
     *
     * @return TrackingResponseInterface
     *
     * @throws SoapException
     */
    public function getTrackingInformation(TrackingRequestInterface $request)
    {
        $soapRequest = $this->requestMapper->map($request);
        try {
            $soapResponse = $this->client->__soapCall('trackShipmentRequest', [$soapRequest]);
        } catch (\SoapFault $e) {
            throw new SoapException('Could not access SOAP webservice.');
        }

        return $this->responseMapper->map($soapResponse);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRequest()
    {
        $lastRequest = sprintf(
            "%s\n%s",
            $this->client->__getLastRequestHeaders(),
            $this->client->__getLastRequest()
        );

        return $lastRequest;
    }

    /**
     * {@inheritdoc}
     */
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
