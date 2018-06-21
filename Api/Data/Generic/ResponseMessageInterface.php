<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Generic;

/**
 * Shipment Response Message Interface.
 *
 * DTO that carries web service operation result notifications.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ResponseMessageInterface
{
    /**
     * @return int
     */
    public function getCode(): int;

    /**
     * @return string
     */
    public function getMessage(): string;
}
