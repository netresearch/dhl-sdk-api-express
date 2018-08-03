<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Response\Tracking\MessageInterface;
use Dhl\Express\Api\Data\Response\Tracking\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Response\Tracking\ShipmentEventInterface;
use Dhl\Express\Api\Data\Response\Tracking\PieceInterface;

/**
 * Rate Response Interface.
 *
 * DTO that carries relevant data for processing the tracking result.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface TrackingResponseInterface
{
    /**
     * Returns the message.
     *
     * @return MessageInterface
     */
    public function getMessage(): MessageInterface;

    /**
     * Returns the AWB number.
     *
     * @return int
     */
    public function getAwbNumber(): int;

    /**
     * Returns the status.
     *
     * @return string
     */
    public function getAwbStatus(): string;

    /**
     * Returns the shipment Details.
     *
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails(): ShipmentDetailsInterface;

    /**
     * Returns the shipment events.
     *
     * @return ShipmentEventInterface[]
     */
    public function getShipmentEvents(): array;

    /**
     * Returnes the pieces
     *
     * @return PieceInterface[]
     */
    public function getPieces(): array;
}
