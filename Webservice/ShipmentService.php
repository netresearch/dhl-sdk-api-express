<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Webservice\Adapter\ShipmentServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Psr\Log\LoggerInterface;

/**
 * Shipment Service.
 *
 * Access the DHL Express Global Web Services shipment operations
 * "ShipmentRequest" and "ShipmentDeleteRequest".
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentService implements ShipmentServiceInterface
{
    /**
     * @var ShipmentServiceAdapterInterface
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * ShipmentService constructor.
     * @param ShipmentServiceAdapterInterface $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        ShipmentServiceAdapterInterface $adapter,
        LoggerInterface $logger
    ) {
        $this->adapter = $adapter;
        $this->logger = $logger;
    }

    /**
     * @param ShipmentRequestInterface $request
     * @return ShipmentResponseInterface
     */
    public function createShipment(ShipmentRequestInterface $request): ShipmentResponseInterface
    {
        $response = $this->adapter->createShipment($request);

        if ($this->adapter instanceof TraceableInterface) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->debug($this->adapter->getLastResponse());
        }

        return $response;
    }

    /**
     * @param ShipmentDeleteRequestInterface $request
     * @return ShipmentDeleteResponseInterface
     * @throws \Exception
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request): ShipmentDeleteResponseInterface
    {
        throw new \Exception('Not implemented.');
    }
}
