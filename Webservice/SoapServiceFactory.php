<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice;

use Dhl\Express\Api\PickupServiceInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use Dhl\Express\Webservice\Soap\ShipmentServiceAdapter;
use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Dhl\Express\Webservice\Soap\TrackingServiceAdapter;
use Dhl\Express\Webservice\Soap\TypeMapper\RateRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\RateResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentDeleteRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentDeleteResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\ShipmentResponseMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingRequestMapper;
use Dhl\Express\Webservice\Soap\TypeMapper\TrackingResponseMapper;
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
     * @param string          $username
     * @param string          $password
     * @param LoggerInterface $logger
     *
     * @return RateServiceInterface
     */
    public function createRateService(
        $username,
        $password,
        LoggerInterface $logger
    ) {
        $clientFactory = new SoapClientFactory();
        $client = $clientFactory->create($username, $password);

        $requestMapper = new RateRequestMapper();
        $responseMapper = new RateResponseMapper();

        $adapter = new RateServiceAdapter($client, $requestMapper, $responseMapper);

        return new RateService($adapter, $logger);
    }

    /**
     * @param string          $username
     * @param string          $password
     * @param LoggerInterface $logger
     * @return ShipmentServiceInterface
     */
    public function createShipmentService(
        $username,
        $password,
        LoggerInterface $logger
    ) {
        $clientFactory = new SoapClientFactory();

        /** @TODO(nr)
         * this WSDL is currently hardcoded (because it was edited) to properly process multi piece shipments
         * Once the WSDL is in a state where the validation through the SOAP extension no longer fails,
         * this has to be removed
         */
        $client = $clientFactory->create(
            $username,
            $password,
            __DIR__ . DIRECTORY_SEPARATOR . 'Soap' . DIRECTORY_SEPARATOR . 'rateBook.wsdl'
        );

        $adapter = new ShipmentServiceAdapter(
            $client,
            new ShipmentRequestMapper(),
            new ShipmentResponseMapper(),
            new ShipmentDeleteRequestMapper(),
            new ShipmentDeleteResponseMapper()
        );

        return new ShipmentService($adapter, $logger);
    }

    /**
     * @param string          $username
     * @param string          $password
     * @param LoggerInterface $logger
     * @return TrackingService
     */
    public function createTrackingService(
        $username,
        $password,
        LoggerInterface $logger
    ) {
        $clientFactory = new SoapClientFactory();
        $client = $clientFactory->create(
            $username,
            $password,
            'https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL'
        );

        $requestMapper = new TrackingRequestMapper();
        $responseMapper = new TrackingResponseMapper();

        $adapter = new TrackingServiceAdapter($client, $requestMapper, $responseMapper);

        return new TrackingService($adapter, $logger);
    }

    /**
     * @throws \Exception
     */
    public function createPickupService()
    {
        throw new \RuntimeException('Not yet implemented.');
    }
}
