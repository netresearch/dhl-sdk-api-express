<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\Pickup\ShipperInterface;
use Dhl\Express\Api\Data\Request\RecipientInterface;

/**
 * Pickup Request Interface.
 *
 * DTO that carries relevant data for requesting pickup information.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface PickupRequestInterface
{
    /**
     * Returns the pickup timestamp.
     *
     * @return int
     */
    public function getPickupTimestamp();

    /**
     * Returns the service type.
     *
     * @return string
     */
    public function getServiceType();

    /**
     * Returns the payment type.
     *
     * @return string
     */
    public function getPaymentType();

    /**
     * Returns the commodity's description.
     *
     * @return string
     */
    public function getCommoditiesDescription();

    /**
     * Returns the shipper.
     *
     * @return ShipperInterface
     */
    public function getShipper();

    /**
     * Returns the recipient.
     *
     * @return RecipientInterface
     */
    public function getSRecipient();

    /**
     * Returns the packages.
     *
     * @return PackageInterface[]
     */
    public function getPackages();
}
