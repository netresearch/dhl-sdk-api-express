<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;

/**
 * Shipment Request Builder.
 *
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShipmentDeleteRequestBuilderInterface
{
    /**
     * Sets the scheduled pickup date of the shipment to be deleted.
     *
     * @param string $pickupDate The scheduled pickup date of the shipment to be deleted
     *
     * @return self
     */
    public function setPickupDate(string $pickupDate): ShipmentDeleteRequestBuilderInterface;

    /**
     * Sets the country code associated to the origin of the shipment.
     *
     * @param string $pickupCountry The country code associated to the origin of the shipment
     *
     * @return self
     */
    public function setPickupCountry(string $pickupCountry): ShipmentDeleteRequestBuilderInterface;

    /**
     * Sets the confirmation number returned from the original shipment request.
     *
     * @param string $dispatchConfirmationNumber The confirmation number returned from the original shipment request
     *
     * @return self
     */
    public function setDispatchConfirmationNumber(string $dispatchConfirmationNumber): ShipmentDeleteRequestBuilderInterface;

    /**
     * Sets the delete requester name.
     *
     * @param string $requesterName The delete requester name
     *
     * @return self
     */
    public function setRequesterName(string $requesterName): ShipmentDeleteRequestBuilderInterface;

    /**
     * Sets the optional reason code.
     *
     * @param string $reasonCode The reason code
     *
     * @return self
     */
    public function setReason(string $reasonCode): ShipmentDeleteRequestBuilderInterface;

    /**
     * Builds the shipment request instance.
     *
     * @return ShipmentDeleteRequestInterface
     */
    public function build(): ShipmentDeleteRequestInterface;
}
