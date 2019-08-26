<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice;

use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Api\ServiceFactoryInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Api\TrackingServiceInterface;
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
 * @link     https://www.netresearch.de/
 */
class SoapServiceFactory implements ServiceFactoryInterface
{
    /**
     * Messages fail to generate with the original DHL Express WSDL, use a modified local copy instead.
     *
     * This local copy is shipped primarily to properly process multi piece shipments. Once the original WSDL is in a
     * state where the validation through the SOAP extension no longer fails, this has to be removed.
     *
     * @param bool $sandpit
     * @return string
     *
     * @link https://bugs.nr/DHLEX-60
     */
    private function getWsdlFilename(bool $sandpit)
    {
        if ($sandpit) {
            $wsdl = __DIR__ . '/Soap/wsdl/sndpt-expressRateBook.wsdl';
        } else {
            $wsdl = __DIR__ . '/Soap/wsdl/prod-expressRateBook.wsdl';
        }

        return $wsdl;
    }

    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandpit
     *
     * @return RateServiceInterface|RateService
     * @throws \SoapFault
     */
    public function createRateService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    ) {
        $clientFactory = new SoapClientFactory();
        $wsdl = $this->getWsdlFilename($sandpit);

        $client = $clientFactory->create($username, $password, $wsdl);

        $requestMapper = new RateRequestMapper();
        $responseMapper = new RateResponseMapper();

        $adapter = new RateServiceAdapter($client, $requestMapper, $responseMapper);

        return new RateService($adapter, $logger);
    }

    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandpit
     *
     * @return ShipmentServiceInterface|ShipmentService
     * @throws \SoapFault
     */
    public function createShipmentService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    ) {
        $clientFactory = new SoapClientFactory();
        $wsdl = $this->getWsdlFilename($sandpit);

        $client = $clientFactory->create($username, $password, $wsdl);

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
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandpit
     *
     * @return TrackingServiceInterface|TrackingService
     * @throws \SoapFault
     */
    public function createTrackingService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    ) {
        $clientFactory = new SoapClientFactory();
        $wsdl = $sandpit ? SoapClientFactory::TRACK_TEST_WSDL : SoapClientFactory::TRACK_PROD_WSDL;

        $client = $clientFactory->create($username, $password, $wsdl);

        $requestMapper = new TrackingRequestMapper();
        $responseMapper = new TrackingResponseMapper();

        $adapter = new TrackingServiceAdapter($client, $requestMapper, $responseMapper);

        return new TrackingService($adapter, $logger);
    }
}
