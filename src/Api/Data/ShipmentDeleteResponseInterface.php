<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

/**
 * Shipment Delete Response Interface.
 *
 * DTO that carries relevant data for processing the cancellation result.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentDeleteResponseInterface
{
    /**
     * Returns the success message.
     *
     * @return string
     */
    public function getMessage();

    /**
     * Returns TRUE if request was successful.
     *
     * @return bool
     */
    public function isSuccess();
}
