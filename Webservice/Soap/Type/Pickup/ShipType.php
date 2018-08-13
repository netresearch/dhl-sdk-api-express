<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * ShipType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipType
{
    /**
     * @var ContactInfoType
     */
    protected $Shipper;

    /**
     * @var ContactInfoType
     */
    protected $Pickup;

    /**
     * @var ContactInfoType
     */
    protected $BookingRequestor;

    /**
     * @var ContactInfoType
     */
    protected $Recipient;

    /**
     * @param ContactInfoType $Shipper
     * @param ContactInfoType $Recipient
     */
    public function __construct(ContactInfoType $Shipper, ContactInfoType $Recipient)
    {
        $this->Shipper = $Shipper;
        $this->Recipient = $Recipient;
    }

    /**
     * @return ContactInfoType
     */
    public function getShipper(): ContactInfoType
    {
        return $this->Shipper;
    }

    /**
     * @param ContactInfoType $Shipper
     * @return self
     */
    public function setShipper(ContactInfoType $Shipper): self
    {
        $this->Shipper = $Shipper;
        return $this;
    }

    /**
     * @return ContactInfoType
     */
    public function getPickup(): ContactInfoType
    {
        return $this->Pickup;
    }

    /**
     * @param ContactInfoType $Pickup
     * @return self
     */
    public function setPickup(ContactInfoType $Pickup): self
    {
        $this->Pickup = $Pickup;
        return $this;
    }

    /**
     * @return ContactInfoType
     */
    public function getBookingRequestor(): ContactInfoType
    {
        return $this->BookingRequestor;
    }

    /**
     * @param ContactInfoType $BookingRequestor
     * @return self
     */
    public function setBookingRequestor(ContactInfoType $BookingRequestor): self
    {
        $this->BookingRequestor = $BookingRequestor;
        return $this;
    }

    /**
     * @return ContactInfoType
     */
    public function getRecipient(): ContactInfoType
    {
        return $this->Recipient;
    }

    /**
     * @param ContactInfoType $Recipient
     * @return self
     */
    public function setRecipient(ContactInfoType $Recipient): self
    {
        $this->Recipient = $Recipient;
        return $this;
    }
}
