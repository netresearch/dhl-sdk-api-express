<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\PickupServiceInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Api\TrackingServiceInterface;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use Dhl\Express\Webservice\Soap\ShipmentServiceAdapter;
use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentResponseMapper;
use Psr\Log\LoggerInterface;

/**
 * SOAP Service Factory.
 *
 * Instantiate a service object that connects to the API via SOAP.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapServiceFactory implements ServiceFactoryInterface
{
    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @return RateServiceInterface
     */
    public function createRateService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): RateServiceInterface {
        $clientFactory = new SoapClientFactory();
        $client = $clientFactory->create($username, $password);

        $requestMapper = new RateRequestMapper();
        $responseMapper = new RateResponseMapper();

        $adapter = new RateServiceAdapter($client, $requestMapper, $responseMapper);

        return new RateService($adapter, $logger);
    }

    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @return ShipmentServiceInterface
     */
    public function createShipmentService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ShipmentServiceInterface {
        $clientFactory = new SoapClientFactory();
        $client = $clientFactory->create($username, $password);

        $requestMapper = new ShipmentRequestMapper();
        $responseMapper = new ShipmentResponseMapper();

        $adapter = new ShipmentServiceAdapter($client, $requestMapper, $responseMapper);

        return new ShipmentService($adapter, $logger);
    }

    /**
     * @throws \Exception
     */
    public function createTrackingService()
    {
        throw new \RuntimeException('Not yet implemented.');
    }

    /**
     * @throws \Exception
     */
    public function createPickupService()
    {
        throw new \RuntimeException('Not yet implemented.');
    }
}
