<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Rate;

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
     * Returns the terms of trade.
     *
     * @return string
     */
    public function getTermsOfTrade();

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
     * Returns if the request response should contain value added services.
     *
     * @return bool
     */
    public function isValueAddedServicesRequested();

    /**
     * Returns if products for the next day should be fetched if the DHL cutoff time is exceeded
     *
     * @return bool
     */
    public function isNextBusinessDayIndicator();
}
