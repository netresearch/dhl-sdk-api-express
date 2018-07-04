<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Request;

/**
 * Shipment Details Interface.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentDetailsInterface
{
    /**
     * @return string
     */
    public function getTermsOfTrade(): string;

    /**
     * @return boolean
     */
    public function isUnscheduledPickup(): bool;

    /**
     * @return boolean
     */
    public function isRegularPickup(): bool;

    /**
     * @return string
     */
    public function getContentType(): string;

    /**
     * @return int
     */
    public function getReadyAtTimestamp(): int;
}
