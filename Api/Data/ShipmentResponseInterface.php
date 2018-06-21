<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Generic\ResponseMessageInterface;

/**
 * Shipment Response Interface.
 *
 * DTO that carries relevant data for processing the booking operation result.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentResponseInterface
{
    /**
     * @return ResponseMessageInterface[]
     */
    public function getMessages(): array;

    /**
     * Obtain the Base64 encoded binary PDF data.
     *
     * @return string
     */
    public function getLabelData(): string;

    /**
     * Obtain the tracking numbers assigned to the booked shipment's packages.
     *
     * Note: The key in the returned array equals the reference numbers
     * as assigned for the shipment request packages.
     * @see \Dhl\Express\Api\Data\Shipment\PackageInterface::getSequenceNumber()
     *
     * Example:
     * [
     *     1 => 'JD012959120890065400',
     *     2 => 'JD012959120890065401',
     *     …
     *     $pkgSequenceNumber => $pkgTrackingNumber,
     * ]
     *
     * @return string[]
     */
    public function getTrackingNumbers(): array;

    /**
     * Obtain the shipment identification number
     * @return string
     */
    public function getShipmentIdentificationNumber(): string;
}
