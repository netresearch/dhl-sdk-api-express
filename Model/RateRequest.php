<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\ShipperAddressInterface;
use Dhl\Express\Api\Data\Request\SpecialServiceInterface;

/**
 * Rate Request.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequest implements RateRequestInterface
{
    /**
     * @var ShipperAddressInterface
     */
    private $shipperAddress;

    /**
     * @var string
     */
    private $shipperAccountNumber;

    /**
     * @var RecipientAddressInterface
     */
    private $RecipientAddress;

    /**
     * @var ShipmentDetailsInterface
     */
    private $shipmentDetails;

    /**
     * @var PackageInterface[]
     */
    private $packages;

    /**
     * @var SpecialServiceInterface[]
     */
    private $specialServices;

    /**
     * RateRequest constructor.
     * @param ShipperAddressInterface $shipperAddress
     * @param string $shipperAccountNumber
     * @param RecipientAddressInterface $RecipientAddress
     * @param ShipmentDetailsInterface $shipmentDetails
     * @param PackageInterface[] $packages
     * @param SpecialServiceInterface[] $specialServices
     */
    public function __construct(
        ShipperAddressInterface $shipperAddress,
        string $shipperAccountNumber,
        RecipientAddressInterface $RecipientAddress,
        ShipmentDetailsInterface $shipmentDetails,
        array $packages,
        array $specialServices
    ) {
        $this->shipperAddress = $shipperAddress;
        $this->shipperAccountNumber = $shipperAccountNumber;
        $this->RecipientAddress = $RecipientAddress;
        $this->shipmentDetails = $shipmentDetails;
        $this->packages = $packages;
        $this->specialServices = $specialServices;
    }

    /**
     * @return ShipperAddressInterface
     */
    public function getShipperAddress(): ShipperAddressInterface
    {
        return $this->shipperAddress;
    }

    /**
     * @return string
     */
    public function getShipperAccountNumber(): string
    {
        return $this->shipperAccountNumber;
    }

    /**
     * @return RecipientAddressInterface
     */
    public function getRecipientAddress(): RecipientAddressInterface
    {
        return $this->RecipientAddress;
    }

    /**
     * @return ShipmentDetailsInterface
     */
    public function getShipmentDetails(): ShipmentDetailsInterface
    {
        return $this->shipmentDetails;
    }

    /**
     * @return PackageInterface[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }

    /**
     * @return SpecialServiceInterface[]
     */
    public function getSpecialServices(): array
    {
        return $this->specialServices;
    }
}