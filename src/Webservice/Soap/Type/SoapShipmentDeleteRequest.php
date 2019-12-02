<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Common\ClientDetail;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\CountryCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact\PersonName;

/**
 * The shipment delete request.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapShipmentDeleteRequest
{
    /**
     * The client detail instance.
     *
     * @var null|ClientDetail
     */
    private $ClientDetail;

    /**
     * The PickupDate is the day of the scheduled pickup, previously communicated as part of the ShipmentTimestamp
     * of the ShipmentRequest. For example, if the ShipmentTimestamp for the successful shipment was
     * “2010-11-30T12:30:47GMT+01:00”, then the PickupDate would be “2010-11-30”.
     *
     * @var string
     */
    private $PickupDate;

    /**
     * The PickupCountry is the two character country code which was used in the original request.
     *
     * @var CountryCode
     */
    private $PickupCountry;

    /**
     * The DispatchConfirmationNumber is the reference value which was in the original ShipmentResponse
     * for DispatchConfirmationNumber.
     *
     * @var string
     */
    private $DispatchConfirmationNumber;

    /**
     * The RequestorName is a required field, but is not validated against the original ShipmentRequest.
     * This value is not validated against the original request, and can be defaulted if necessary.
     *
     * @var PersonName
     */
    private $RequestorName;

    /**
     * The Reason value is an optional field, and used to indicate the reason for the cancellation. The possible
     * values are included in the table below. Value of 7 (“Other”) used in the absence of transmitted data.
     *
     * Possible values:
     *
     *   001 - Package Not Ready
     *   002 - Rates Too High
     *   003 - Transit Time Too Slow
     *   004 - Take To Service Center or Drop Box
     *   005 - Commitment Time Not Met
     *   006 - Reason Not Given
     *   007 - Other
     *   008 - Pickup Modified
     *
     * @var null|string
     */
    private $Reason;

    /**
     * Constructor.
     *
     * @param string $pickupDate                 The scheduled pickup date of the shipment to be deleted
     * @param string $pickupCountry              The country code associated to the origin of the shipment
     * @param string $dispatchConfirmationNumber The confirmation number returned from the original shipment request
     * @param string $requesterName              The delete requester name
     */
    public function __construct(
        $pickupDate,
        $pickupCountry,
        $dispatchConfirmationNumber,
        $requesterName
    ) {
        $this->setPickupDate($pickupDate)
            ->setPickupCountry($pickupCountry)
            ->setDispatchConfirmationNumber($dispatchConfirmationNumber)
            ->setRequestorName($requesterName);
    }

    /**
     * Returns the client detail instance.
     *
     * @return null|ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }

    /**
     * Sets the client detail instance.
     *
     * @param ClientDetail $clientDetail The client detail instance
     *
     * @return self
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }

    /**
     * Returns the scheduled pickup date of the shipment to be deleted.
     *
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }

    /**
     * Sets the scheduled pickup date of the shipment to be deleted.
     *
     * @param string $pickupDate The scheduled pickup date of the shipment to be deleted
     *
     * @return self
     */
    public function setPickupDate($pickupDate)
    {
        $this->PickupDate = $pickupDate;
        return $this;
    }

    /**
     * Returns the country code associated to the origin of the shipment.
     *
     * @return CountryCode
     */
    public function getPickupCountry()
    {
        return $this->PickupCountry;
    }

    /**
     * Sets the country code associated to the origin of the shipment.
     *
     * @param string $pickupCountry The country code associated to the origin of the shipment
     *
     * @return self
     */
    public function setPickupCountry($pickupCountry)
    {
        $this->PickupCountry = new CountryCode($pickupCountry);
        return $this;
    }

    /**
     * Returns the confirmation number returned from the original shipment request.
     *
     * @return string
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->DispatchConfirmationNumber;
    }

    /**
     * Sets the confirmation number returned from the original shipment request.
     *
     * @param string $dispatchConfirmationNumber The dispatch confirmation number
     *
     * @return self
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber)
    {
        $this->DispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }

    /**
     * Returns the delete requester name.
     *
     * @return PersonName
     */
    public function getRequestorName()
    {
        return $this->RequestorName;
    }

    /**
     * Sets the delete requester name.
     *
     * @param string $requesterName The requester name
     *
     * @return self
     */
    public function setRequestorName($requesterName)
    {
        $this->RequestorName = new PersonName($requesterName);
        return $this;
    }

    /**
     * Returns the optional reason code.
     *
     * @return null|string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * Sets the optional reason code.
     *
     * @param string $reason The reason code
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
}
