<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\BuyerContactInfo as BuyerContactInfo;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\ContactInfo;

/**
 * The Ship section outlines the shipper, receiver and optional pickup address for the specific shipment request.
 * In the context to rate requests, the street address elements are not critical, since capability and rate are
 * determined based on city, postal code, and country code. Please note that the Shipper, Pickup, BookingRequestor
 * and Recipient structures are identical.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Ship
{
    /**
     * The shipper contact info.
     * 
     * @var ContactInfo
     */
    private $Shipper;

    /**
     * The pickup contact info.
     *
     * @var ContactInfo
     */
    protected $Pickup;

    /**
     * The booking requester contact info.
     *
     * @var ContactInfo
     */
    protected $BookingRequestor;

    /**
     * The booking requester contact info.
     *
     * @var BuyerContactInfo
     */
    protected $Buyer;

    /**
     * The recipient contact info.
     * 
     * @var ContactInfo
     */
    private $Recipient;

    /**
     * Constructs the ship section.
     *
     * @param ContactInfo $shipper   The shipper contact info
     * @param ContactInfo $recipient The recipient contact info
     */
    public function __construct(ContactInfo $shipper, ContactInfo $recipient)
    {
        $this->setShipper($shipper)
            ->setRecipient($recipient);
    }

    /**
     * Returns the shipper contact info.
     *
     * @return ContactInfo
     */
    public function getShipper(): ContactInfo
    {
        return $this->Shipper;
    }

    /**
     * Sets the shipper contact info.
     *
     * @param ContactInfo $contactInfo The shipper contact info
     *
     * @return self
     */
    public function setShipper(ContactInfo $contactInfo): Ship
    {
        $this->Shipper = $contactInfo;
        return $this;
    }

    /**
     * Returns the pickup contact info.
     *
     * @return ContactInfo
     */
    public function getPickup(): ContactInfo
    {
        return $this->Pickup;
    }

    /**
     * Sets the pickup contact info.
     *
     * @param ContactInfo $contactInfo The pickup contact info
     *
     * @return self
     */
    public function setPickup(ContactInfo $contactInfo): Ship
    {
        $this->Pickup = $contactInfo;
        return $this;
    }

    /**
     * Returns the booking requester contact info.
     *
     * @return ContactInfo
     */
    public function getBookingRequestor(): ContactInfo
    {
        return $this->BookingRequestor;
    }

    /**
     * Sets the booking requester contact info.
     *
     * @param ContactInfo $contactInfo The booking requester contact info
     *
     * @return self
     */
    public function setBookingRequestor(ContactInfo $contactInfo): Ship
    {
        $this->BookingRequestor = $contactInfo;
        return $this;
    }

    /**
     * Returns the buyer contact info.
     *
     * @return BuyerContactInfo
     */
    public function getBuyer(): BuyerContactInfo
    {
        return $this->Buyer;
    }

    /**
     * Sets the buyer contact info.
     *
     * @param BuyerContactInfo $contactInfo The buyer contact info
     *
     * @return self
     */
    public function setBuyer(BuyerContactInfo $contactInfo): Ship
    {
        $this->Buyer = $contactInfo;
        return $this;
    }

    /**
     * Returns the recipient contact info.
     *
     * @return ContactInfo
     */
    public function getRecipient(): ContactInfo
    {
        return $this->Recipient;
    }

    /**
     * Sets the recipient contact info.
     *
     * @param ContactInfo $contactInfo The recipient contact info
     *
     * @return self
     */
    public function setRecipient(ContactInfo $contactInfo): Ship
    {
        $this->Recipient = $contactInfo;
        return $this;
    }
}
