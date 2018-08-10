<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
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

    /**
     * Performs the shipment create request.
     *
     * @param ShipmentRequestInterface $request The shipment request
     *
     * @return ShipmentResponseInterface
     *
     * @throws SoapException
     * @throws \Dhl\Express\Exception\ShipmentRequestException
     */
    public function createShipment(ShipmentRequestInterface $request): ShipmentResponseInterface
    {
        $soapRequest = $this->requestMapper->map($request);

        try {
            $soapResponse = $this->client->__soapCall('createShipmentRequest', [ $soapRequest ]);
        } catch (\SoapFault $e) {
            throw new SoapException('Could not access SOAP webservice.');
        }

        return $this->responseMapper->map($soapResponse);
    }

    /**
     * Performs the shipment delete request.
     *
     * @param ShipmentDeleteRequestInterface $request The shipment request
     *
     * @return ShipmentDeleteResponseInterface
     *
     * @throws SoapException
     * @throws \Dhl\Express\Exception\ShipmentDeleteRequestException
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request): ShipmentDeleteResponseInterface
    {
        $soapRequest = $this->shipmentDeleteRequestMapper->map($request);

        try {
            $soapResponse = $this->client->__soapCall('deleteShipmentRequest', [ $soapRequest ]);
        } catch (\SoapFault $e) {
            throw new SoapException('Could not access SOAP webservice.');
        }

        return $this->shipmentDeleteResponseMapper->map($soapResponse);
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
