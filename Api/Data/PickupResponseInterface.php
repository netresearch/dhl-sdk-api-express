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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
