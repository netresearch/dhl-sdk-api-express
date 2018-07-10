<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Shipment;

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
     * Returns the terms of trade.
     *
     * @return string
     */
    public function getTermsOfTrade(): string;

    /**
     * Returns whether this is a scheduled pickup or not.
     *
     * @return bool
     */
    public function isUnscheduledPickup(): bool;

    /**
     * Returns TRUE if this is a regular pickup.
     *
     * @return bool
     */
    public function isRegularPickup(): bool;

    /**
     * Returns the content type.
     *
     * @return string
     */
    public function getContentType(): string;

    /**
     * Returns the ship timestamp.
     *
     * @return int
     */
    public function getReadyAtTimestamp(): int;

    /**
     * Returns the service type.
     *
     * @return string
     */
    public function getServiceType(): string;

    /**
     * Returns the currency code.
     *
     * @return string
     */
    public function getCurrencyCode(): string;

    /**
     * Returns the number of pieces
     *
     * @return int
     */
    public function getNumberOfPieces(): int;

    /**
     * Returns the description.
     *
     * @return string
     */
    public function getDescription(): string;
}
