<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Webservice\Adapter\ShipmentServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentResponseMapper;

/**
 * Rate Service SOAP Adapter.
 *
 * @package Dhl\Express\Webservice
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class ShipmentServiceAdapter implements ShipmentServiceAdapterInterface, TraceableInterface
{
    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * @var ShipmentRequestMapper
     */
    private $requestMapper;

    /**
     * @var ShipmentResponseMapper
     */
    private $responseMapper;

    /**
     * ShipmentServiceAdapter constructor.
     * @param \SoapClient $client
     * @param ShipmentRequestMapper $requestMapper
     * @param ShipmentResponseMapper $responseMapper
     */
    public function __construct(
        \SoapClient $client,
        ShipmentRequestMapper $requestMapper,
        ShipmentResponseMapper $responseMapper
    ) {
        $this->client = $client;
        $this->requestMapper = $requestMapper;
        $this->responseMapper = $responseMapper;
    }

    /**
     * @param ShipmentRequestInterface $request
     * @return ShipmentResponseInterface
     */
    public function createShipment(ShipmentRequestInterface $request): ShipmentResponseInterface
    {
        $soapRequest = $this->requestMapper->map($request);
        $soapResponse = $this->client->__soapCall('createShipmentRequest', [$soapRequest]);

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
