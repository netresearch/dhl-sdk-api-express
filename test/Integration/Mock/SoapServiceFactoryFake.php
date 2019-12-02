<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Mock;

use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Webservice\RateService;
use Dhl\Express\Webservice\ShipmentService;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use Dhl\Express\Webservice\Soap\ShipmentServiceAdapter;
use Dhl\Express\Webservice\Soap\TrackingServiceAdapter;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentDeleteRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentDeleteResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingResponseMapper;
use Dhl\Express\Webservice\TrackingService;
use Psr\Log\LoggerInterface;

/**
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapServiceFactoryFake implements ServiceFactoryInterface
{
    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * SoapServiceFactoryFake constructor.
     * @param \SoapClient $client SOAP client mock
     */
    public function __construct(\SoapClient $client)
    {
        $this->client = $client;
    }

    public function createRateService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    ) {
        $requestMapper = new RateRequestMapper();
        $responseMapper = new RateResponseMapper();
        $adapter = new RateServiceAdapter($this->client, $requestMapper, $responseMapper);

        return new RateService($adapter, $logger);
    }

    public function createShipmentService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    ) {
        $adapter = new ShipmentServiceAdapter(
            $this->client,
            new ShipmentRequestMapper(),
            new ShipmentResponseMapper(),
            new ShipmentDeleteRequestMapper(),
            new ShipmentDeleteResponseMapper()
        );

        return new ShipmentService($adapter, $logger);
    }

    public function createTrackingService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    ) {
        $requestMapper = new TrackingRequestMapper();
        $responseMapper = new TrackingResponseMapper();
        $adapter = new TrackingServiceAdapter($this->client, $requestMapper, $responseMapper);

        return new TrackingService($adapter, $logger);
    }
}
