<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
use Dhl\Express\Api\Data\Request\Shipment\LabelOptionsInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\Shipment\ShipperInterface;

/**
 * Shipment Request Interface.
 *
 * DTO that carries relevant data for booking a shipment.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
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
     * @return string
     */
    public function getBillingAccountNumber(): string;

    /**
     * @return null|InsuranceInterface
     */
    public function getInsurance(): ?InsuranceInterface;

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
     * @return null|DryIceInterface
     */
    public function getDryIce(): ?DryIceInterface;

    /**
     * @return null|LabelOptionsInterface
     */
    public function getLabelOptions(): ?LabelOptionsInterface;
}
