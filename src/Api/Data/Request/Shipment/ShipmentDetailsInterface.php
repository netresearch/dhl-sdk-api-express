<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Shipment;

/**
 * Shipment Details Interface.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentDetailsInterface
{
    /**
     * Returns the terms of trade.
     *
     * @return string
     */
    public function getTermsOfTrade();

    /**
     * Returns whether this is a scheduled pickup or not.
     *
     * @return bool
     */
    public function isUnscheduledPickup();

    /**
     * Returns TRUE if this is a regular pickup.
     *
     * @return bool
     */
    public function isRegularPickup();

    /**
     * Returns the content type.
     *
     * @return string
     */
    public function getContentType();

    /**
     * Returns the ship timestamp.
     *
     * @return \DateTime
     */
    public function getReadyAtTimestamp();

    /**
     * Returns the number of pieces
     *
     * @return int
     */
    public function getNumberOfPieces();

    /**
     * Returns the currency code.
     *
     * @return string
     */
    public function getCurrencyCode();

    /**
     * Returns the description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Returns the customs value.
     *
     * @return float
     */
    public function getCustomsValue();

    /**
     * Returns the service type.
     *
     * @return string
     */
    public function getServiceType();
}
