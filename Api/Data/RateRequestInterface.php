<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\Rate\ShipperAddressInterface;
use Dhl\Express\Api\Data\Request\Rate\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\Rate\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\Rate\PackageInterface;
use Dhl\Express\Api\Data\Request\InsuranceInterface;

/**
 * Rate Request Interface.
 *
 * DTO that carries relevant data for requesting shipping rates.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RateRequestInterface
{
    /**
     * @return ShipperAddressInterface
     */
    public function getShipperAddress(): ShipperAddressInterface;

    /**
     * @return string
     */
    public function getShipperAccountNumber(): string;

    /**
     * @return RecipientAddressInterface
     */
    public function getRecipientAddress(): RecipientAddressInterface;

    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails(): ShipmentDetailsInterface;

    /**
     * @return PackageInterface[]
     */
    public function getPackages(): array;

    /**
     * @return InsuranceInterface
     */
    public function getInsurance(): InsuranceInterface;
}
