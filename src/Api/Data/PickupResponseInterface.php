<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

/**
 * Pickup Response Interface.
 *
 * DTO that carries relevant data for processing the pickup result.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface PickupResponseInterface
{
    /**
     * Return the code.
     *
     * @return string
     */
    public function getCode();

    /**
     * Return the message.
     *
     * @return string
     */
    public function getMessage();
}
