<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data;

use Dhl\Express\Api\Data\Request\ShipperAddressInterface;
use Dhl\Express\Api\Data\Request\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\InsuranceServiceInterface;

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
     * @return InsuranceServiceInterface|null
     */
    public function getInsuranceService(): ?InsuranceServiceInterface;
}
