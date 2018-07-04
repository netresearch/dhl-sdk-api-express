<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Mock;

use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Webservice\RateService;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;
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
        LoggerInterface $logger
    ): RateServiceInterface {
        $requestMapper = new RateRequestMapper();
        $responseMapper = new RateResponseMapper();
        $adapter = new RateServiceAdapter($this->client, $requestMapper, $responseMapper);

        return new RateService($adapter, $logger);
    }

    public function createShipmentService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ShipmentServiceInterface
    {
        // TODO: Implement createShipmentService() method.
    }

    public function createTrackingService()
    {
        // TODO: Implement createTrackingService() method.
    }

    public function createPickupService()
    {
        // TODO: Implement createPickupService() method.
    }
}
