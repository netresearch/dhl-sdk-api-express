<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_ShipType2
{

    /**
     * @var docTypeRef_AddressType2 $Shipper
     */
    protected $Shipper = null;

    /**
     * @var docTypeRef_AddressType2 $Recipient
     */
    protected $Recipient = null;

    /**
     * @param docTypeRef_AddressType2 $Shipper
     * @param docTypeRef_AddressType2 $Recipient
     */
    public function __construct($Shipper, $Recipient)
    {
      $this->Shipper = $Shipper;
      $this->Recipient = $Recipient;
    }

    /**
     * @return docTypeRef_AddressType2
     */
    public function getShipper()
    {
      return $this->Shipper;
    }

    /**
     * @param docTypeRef_AddressType2 $Shipper
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ShipType2
     */
    public function setShipper($Shipper)
    {
      $this->Shipper = $Shipper;
      return $this;
    }

    /**
     * @return docTypeRef_AddressType2
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param docTypeRef_AddressType2 $Recipient
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ShipType2
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

}
