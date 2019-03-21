<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;

/**
 * Shipment Service Interface.
 *
 * Access the DHL Express Global Web Services shipment operations
 * "SoapShipmentRequest" and "ShipmentDeleteRequest".
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentServiceInterface
{
    /**
     * @param ShipmentRequestInterface $request
     * @return ShipmentResponseInterface
     */
    public function createShipment(ShipmentRequestInterface $request);

    /**
     * @param ShipmentDeleteRequestInterface $request
     * @return ShipmentDeleteResponseInterface
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request);
}
