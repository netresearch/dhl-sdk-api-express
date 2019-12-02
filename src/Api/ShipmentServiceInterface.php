<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Exception\ShipmentDeleteRequestException;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Exception\SoapException;

/**
 * Shipment Service Interface.
 *
 * Access the DHL Express Global Web Services shipment operations
 * "SoapShipmentRequest" and "ShipmentDeleteRequest".
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentServiceInterface
{
    /**
     * Performs the "createShipment" request.
     *
     * @param ShipmentRequestInterface $request The API request
     * @return ShipmentResponseInterface
     * @throws ShipmentRequestException
     * @throws SoapException
     */
    public function createShipment(ShipmentRequestInterface $request);

    /**
     * Performs the "deleteShipment" request.
     *
     * @param ShipmentDeleteRequestInterface $request The API request
     * @return ShipmentDeleteResponseInterface
     * @throws ShipmentDeleteRequestException
     * @throws SoapException
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request);
}
