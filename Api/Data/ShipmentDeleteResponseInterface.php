<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use \Dhl\Express\Api\Data\Generic\ResponseMessageInterface;

/**
 * Shipment Delete Response Interface.
 *
 * DTO that carries relevant data for processing the cancellation result.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentDeleteResponseInterface
{
    /**
     * @return ResponseMessageInterface[]
     */
    public function getMessages(): array;
}
