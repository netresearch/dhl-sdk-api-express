<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Exception\ShipmentDeleteRequestException;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Soap\ShipmentServiceAdapter;
use Psr\Log\LoggerInterface;

/**
 * Shipment Service.
 *
 * Access the DHL Express Global Web Services shipment operations
 * "SoapShipmentRequest" and "ShipmentDeleteRequest".
 *
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentService implements ShipmentServiceInterface
{
    /**
     * @var ShipmentServiceAdapter
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ShipmentService constructor.
     * @param ShipmentServiceAdapter $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        ShipmentServiceAdapter $adapter,
        LoggerInterface $logger
    ) {
        $this->adapter = $adapter;
        $this->logger = $logger;
    }

    public function createShipment(ShipmentRequestInterface $request)
    {
        try {
            $response = $this->adapter->createShipment($request);
        } catch (SoapException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (ShipmentRequestException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } finally {
            $this->logger->debug('SOAP REQUEST' . PHP_EOL . $this->adapter->getLastRequest());
            if (trim($this->adapter->getLastResponse())) {
                $this->logger->debug('SOAP RESPONSE' . PHP_EOL . $this->adapter->getLastResponse());
            }
        }

        return $response;
    }

    public function deleteShipment(ShipmentDeleteRequestInterface $request)
    {
        try {
            $response = $this->adapter->deleteShipment($request);
        } catch (SoapException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (ShipmentDeleteRequestException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } finally {
            $this->logger->debug('SOAP REQUEST' . PHP_EOL . $this->adapter->getLastRequest());
            if (trim($this->adapter->getLastResponse())) {
                $this->logger->debug('SOAP RESPONSE' . PHP_EOL . $this->adapter->getLastResponse());
            }
        }

        return $response;
    }
}
