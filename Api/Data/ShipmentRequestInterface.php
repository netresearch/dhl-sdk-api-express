<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
use Dhl\Express\Api\Data\Request\Shipment\PackageInterface;
use Dhl\Express\Api\Data\Request\Shipment\RecipientInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipperInterface;

/**
 * Shipment Request Interface.
 *
 * DTO that carries relevant data for booking a shipment.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentRequestInterface
{
    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails(): ShipmentDetailsInterface;

    /**
     * @return string
     */
    public function getPayerAccountNumber(): string;

    /**
     * @return InsuranceInterface
     */
    public function getInsurance(): InsuranceInterface;

    /**
     * @return ShipperInterface
     */
    public function getShipper(): ShipperInterface;

    /**
     * @return RecipientInterface
     */
    public function getRecipient(): RecipientInterface;

    /**
     * @return PackageInterface[]
     */
    public function getPackages(): array;

    /**
     * @return DryIceInterface
     */
    public function getDryIce(): DryIceInterface;
}
