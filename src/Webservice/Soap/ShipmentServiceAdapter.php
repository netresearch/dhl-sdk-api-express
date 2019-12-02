<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Adapter\ShipmentServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentDeleteRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentDeleteResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentResponseMapper;

/**
 * Rate Service SOAP Adapter.
 *
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
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
     * @var ShipmentDeleteRequestMapper
     */
    private $shipmentDeleteRequestMapper;

    /**
     * @var ShipmentDeleteResponseMapper
     */
    private $shipmentDeleteResponseMapper;

    /**
     * ShipmentServiceAdapter constructor.
     *
     * @param \SoapClient                  $client
     * @param ShipmentRequestMapper        $requestMapper
     * @param ShipmentResponseMapper       $responseMapper
     * @param ShipmentDeleteRequestMapper  $shipmentDeleteRequestMapper
     * @param ShipmentDeleteResponseMapper $shipmentDeleteResponseMapper
     */
    public function __construct(
        \SoapClient $client,
        ShipmentRequestMapper $requestMapper,
        ShipmentResponseMapper $responseMapper,
        ShipmentDeleteRequestMapper $shipmentDeleteRequestMapper,
        ShipmentDeleteResponseMapper $shipmentDeleteResponseMapper
    ) {
        $this->client                       = $client;
        $this->requestMapper                = $requestMapper;
        $this->responseMapper               = $responseMapper;
        $this->shipmentDeleteRequestMapper  = $shipmentDeleteRequestMapper;
        $this->shipmentDeleteResponseMapper = $shipmentDeleteResponseMapper;
    }

    public function createShipment(ShipmentRequestInterface $request)
    {
        try {
            $soapRequest = $this->requestMapper->map($request);
        } catch (\Exception $e) {
            throw new ShipmentRequestException($e->getMessage());
        }

        try {
            $soapResponse = $this->client->__soapCall('createShipmentRequest', [ $soapRequest ]);
        } catch (\SoapFault $e) {
            throw new SoapException(sprintf('Could not access SOAP webservice: %s', $e->getMessage()), 0, $e);
        }

        return $this->responseMapper->map($soapResponse);
    }

    public function deleteShipment(ShipmentDeleteRequestInterface $request)
    {
        $soapRequest = $this->shipmentDeleteRequestMapper->map($request);

        try {
            $soapResponse = $this->client->__soapCall('deleteShipmentRequest', [ $soapRequest ]);
        } catch (\SoapFault $e) {
            throw new SoapException(sprintf('Could not access SOAP webservice: %s', $e->getMessage()), 0, $e);
        }

        return $this->shipmentDeleteResponseMapper->map($soapResponse);
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
