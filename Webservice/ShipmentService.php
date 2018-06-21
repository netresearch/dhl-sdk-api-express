<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceAdapterInterface;
use Dhl\Express\Api\ShipmentServiceInterface;

/**
 * Shipment Service Interface.
 *
 * Access the DHL Express Global Web Services shipment operations
 * "ShipmentRequest" and "ShipmentDeleteRequest".
 *
 * @api
 * @package  Dhl\Express\Api
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
     * ShipmentService constructor.
     * @param ShipmentServiceAdapterInterface $adapter
     */
    public function __construct(ShipmentServiceAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param ShipmentRequestInterface $request
     * @return ShipmentResponseInterface
     */
    public function createShipment(ShipmentRequestInterface $request)
    {
        $response = $this->adapter->createShipment($request);
        return $response;
    }

    /**
     * @param ShipmentDeleteRequestInterface $request
     * @return ShipmentDeleteResponseInterface
     * @throws \Exception
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request)
    {
        throw new \Exception('Not implemented.');
    }
}
