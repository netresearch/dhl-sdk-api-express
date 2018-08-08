<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Mock;

use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Api\TrackingServiceInterface;
use Dhl\Express\Webservice\RateService;
use Dhl\Express\Webservice\ShipmentService;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use Dhl\Express\Webservice\Soap\ShipmentServiceAdapter;
use Dhl\Express\Webservice\Soap\TrackingServiceAdapter;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingResponseMapper;
use Dhl\Express\Webservice\TrackingService;
use Psr\Log\LoggerInterface;

/**
 * @package  Dhl\Express\Test\Integration
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
        string $username,
        string $password,
        LoggerInterface $logger ): RateServiceInterface {
        $requestMapper = new RateRequestMapper();
        $responseMapper = new RateResponseMapper();
        $adapter = new RateServiceAdapter($this->client, $requestMapper, $responseMapper);

        return new RateService($adapter, $logger);
    }

    public function createShipmentService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ShipmentServiceInterface {
        $requestMapper = new ShipmentRequestMapper();
        $responseMapper = new ShipmentResponseMapper();
        $adapter = new ShipmentServiceAdapter($this->client, $requestMapper, $responseMapper);

        return new ShipmentService($adapter, $logger);
    }

    public function createTrackingService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): TrackingServiceInterface {
        $requestMapper = new TrackingRequestMapper();
        $responseMapper = new TrackingResponseMapper();
        $adapter = new TrackingServiceAdapter($this->client, $requestMapper, $responseMapper);

        return new TrackingService($adapter, $logger);
    }

    public function createPickupService()
    {
        // TODO: Implement createPickupService() method.
    }
}
