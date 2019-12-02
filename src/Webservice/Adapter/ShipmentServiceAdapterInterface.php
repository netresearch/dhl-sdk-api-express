<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Adapter;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;
use Dhl\Express\Api\Data\ShipmentDeleteResponseInterface;
use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Exception\ShipmentDeleteRequestException;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Exception\SoapException;

/**
 * Shipment Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access. Choose one.
 *
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentServiceAdapterInterface
{
    /**
     * Performs the shipment create request.
     *
     * @param ShipmentRequestInterface $request The shipment request
     *
     * @return ShipmentResponseInterface
     *
     * @throws SoapException
     * @throws ShipmentRequestException
     */
    public function createShipment(ShipmentRequestInterface $request);

    /**
     * Performs the shipment delete request.
     *
     * @param ShipmentDeleteRequestInterface $request The shipment request
     *
     * @return ShipmentDeleteResponseInterface
     *
     * @throws SoapException
     * @throws ShipmentDeleteRequestException
     */
    public function deleteShipment(ShipmentDeleteRequestInterface $request);
}
