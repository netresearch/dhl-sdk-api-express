<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\ShipmentDeleteRequestInterface;

/**
 * Shipment Delete Request Builder.
 *
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentDeleteRequestBuilderInterface
{
    /**
     * Sets the scheduled pickup date of the shipment to be deleted.
     *
     * @param \DateTime $pickupDate The scheduled pickup date of the shipment to be deleted
     *
     * @return ShipmentDeleteRequestBuilderInterface
     */
    public function setPickupDate(\DateTime $pickupDate);

    /**
     * Sets the country code associated to the origin of the shipment.
     *
     * @param string $pickupCountry The country code associated to the origin of the shipment
     *
     * @return ShipmentDeleteRequestBuilderInterface
     */
    public function setPickupCountry($pickupCountry);

    /**
     * Sets the confirmation number returned from the original shipment request.
     *
     * @param string $dispatchConfirmationNumber The confirmation number returned from the original shipment request
     *
     * @return ShipmentDeleteRequestBuilderInterface
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber);

    /**
     * Sets the delete requester name.
     *
     * @param string $requesterName The delete requester name
     *
     * @return ShipmentDeleteRequestBuilderInterface
     */
    public function setRequesterName($requesterName);

    /**
     * Sets the optional reason code.
     *
     * @param string $reasonCode The reason code
     *
     * @return ShipmentDeleteRequestBuilderInterface
     */
    public function setReason($reasonCode);

    /**
     * Builds the shipment request instance.
     *
     * @return ShipmentDeleteRequestInterface
     */
    public function build();
}
