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
 * Shipment Service Adapter Interface.
 *
 * DHL Express web services support SOAP and REST access.
 *
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentServiceAdapterInterface
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

    /**
     * @return string
     */
    public function getLastRequest();

    /**
     * @return string
     */
    public function getLastResponse();
}
