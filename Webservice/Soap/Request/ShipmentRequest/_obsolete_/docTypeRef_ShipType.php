<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_ShipType
{

    /**
     * @var docTypeRef_ContactInfoType $Shipper
     */
    protected $Shipper = null;

    /**
     * @var docTypeRef_ContactInfoType $Pickup
     */
    protected $Pickup = null;

    /**
     * @var docTypeRef_ContactInfoType $BookingRequestor
     */
    protected $BookingRequestor = null;

    /**
     * @var docTypeRef_ContactInfoType1 $Buyer
     */
    protected $Buyer = null;

    /**
     * @var docTypeRef_ContactInfoType $Recipient
     */
    protected $Recipient = null;

    /**
     * @param docTypeRef_ContactInfoType $Shipper
     * @param docTypeRef_ContactInfoType $Recipient
     */
    public function __construct($Shipper, $Recipient)
    {
      $this->Shipper = $Shipper;
      $this->Recipient = $Recipient;
    }

    /**
     * @return docTypeRef_ContactInfoType
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param docTypeRef_ContactInfoType $Shipper
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return docTypeRef_ContactInfoType
     */
    public function getPickup()
    {
      return $this->Pickup;
    }

    /**
     * @param docTypeRef_ContactInfoType $Pickup
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType
     */
    public function setPickup($Pickup)
    {
      $this->Pickup = $Pickup;
      return $this;
    }

    /**
     * @return docTypeRef_ContactInfoType
     */
    public function getBookingRequestor()
    {
      return $this->BookingRequestor;
    }

    /**
     * @param docTypeRef_ContactInfoType $BookingRequestor
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType
     */
    public function setBookingRequestor($BookingRequestor)
    {
      $this->BookingRequestor = $BookingRequestor;
      return $this;
    }

    /**
     * @return docTypeRef_ContactInfoType1
     */
    public function getBuyer()
    {
      return $this->Buyer;
    }

    /**
     * @param docTypeRef_ContactInfoType1 $Buyer
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType
     */
    public function setBuyer($Buyer)
    {
      $this->Buyer = $Buyer;
      return $this;
    }

    /**
     * @return docTypeRef_ContactInfoType
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param docTypeRef_ContactInfoType $Recipient
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

}
