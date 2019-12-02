<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

/**
 * Shipment Delete Request Interface.
 *
 * DTO that carries relevant data for cancelling a shipment.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentDeleteRequestInterface
{
    /**
     * Reason types.
     */
    const REASON_PACKAGE_NOT_READY       = '001';
    const REASON_RATES_TOO_HIGH          = '002';
    const REASON_TRANSIT_TIME_TOO_SLOW   = '003';
    const REASON_TAKE_TO_SERVICE_CENTER  = '004';
    const REASON_COMMITMENT_TIME_NOT_MET = '005';
    const REASON_REASON_NOT_GIVEN        = '006';
    const REASON_OTHER                   = '007';
    const REASON_PICKUP_MODIFIED         = '008';

    /**
     * Returns the pickup date.
     *
     * @return \DateTime
     */
    public function getPickupDate();

    /**
     * Returns the pickup country code.
     *
     * @return string
     */
    public function getPickupCountry();

    /**
     * Returns the dispatch confirmation number.
     *
     * @return string
     */
    public function getDispatchConfirmationNumber();

    /**
     * Returns the requester name.
     *
     * @return string
     */
    public function getRequesterName();

    /**
     * Returns the reason code.
     *
     * @return string
     */
    public function getReason();

    /**
     * Sets the reason code.
     *
     * @param string $reason The reason code
     *
     * @return ShipmentDeleteRequestInterface
     */
    public function setReason($reason);
}
