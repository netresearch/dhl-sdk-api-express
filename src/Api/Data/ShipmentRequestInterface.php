<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientInterface;
use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;
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
 * @link     https://www.netresearch.de/
 */
interface ShipmentRequestInterface
{
    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails();

    /**
     * @return string
     */
    public function getPayerAccountNumber();

    /**
     * @return null|string
     */
    public function getBillingAccountNumber();

    /**
     * @return null|InsuranceInterface
     */
    public function getInsurance();

    /**
     * @return ShipperInterface
     */
    public function getShipper();

    /**
     * @return RecipientInterface
     */
    public function getRecipient();

    /**
     * @return PackageInterface[]
     */
    public function getPackages();

    /**
     * @return null|DryIceInterface
     */
    public function getDryIce();
}
