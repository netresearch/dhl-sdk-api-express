<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

/**
 * Shipment Response Interface.
 *
 * DTO that carries relevant data for processing the booking operation result.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentResponseInterface
{
    /**
     * Obtain the Base64 encoded binary PDF data.
     *
     * @return string
     */
    public function getLabelData();

    /**
     * Obtain the tracking numbers assigned to the booked shipment's packages.
     *
     * Note: The key in the returned array equals the reference numbers
     * as assigned for the shipment request packages.
     * @see \Dhl\Express\Api\Data\Request\PackageInterface::getSequenceNumber()
     *
     * @example:
     * [
     *     1 => 'JD012959120890065400',
     *     2 => 'JD012959120890065401',
     *     …
     *     $pkgSequenceNumber => $pkgTrackingNumber,
     * ]
     *
     * @return string[]
     */
    public function getTrackingNumbers();

    /**
     * Obtain the shipment identification number
     * @return string
     */
    public function getShipmentIdentificationNumber();

    /**
     * Obtain the dispatch confirmation number
     * @return string
     */
    public function getDispatchConfirmationNumber();
}
