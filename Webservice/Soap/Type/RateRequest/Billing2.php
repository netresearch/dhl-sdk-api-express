<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class Billing2
{

    /**
     * @var Account2 $ShipperAccountNumber
     */
    protected $ShipperAccountNumber = null;

    /**
     * @var ShipmentPaymentType2 $ShippingPaymentType
     */
    protected $ShippingPaymentType = null;

    /**
     * @var Account2 $BillingAccountNumber
     */
    protected $BillingAccountNumber = null;

    /**
     * @param Account2 $ShipperAccountNumber
     * @param ShipmentPaymentType2 $ShippingPaymentType
     */
    public function __construct($ShipperAccountNumber, $ShippingPaymentType)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      $this->ShippingPaymentType = $ShippingPaymentType;
    }

    /**
     * @return Account2
     */
    public function getShipperAccountNumber()
    {
      return $this->ShipperAccountNumber;
    }

    /**
     * @param Account2 $ShipperAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Billing2
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      return $this;
    }

    /**
     * @return ShipmentPaymentType2
     */
    public function getShippingPaymentType()
    {
      return $this->ShippingPaymentType;
    }

    /**
     * @param ShipmentPaymentType2 $ShippingPaymentType
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Billing2
     */
    public function setShippingPaymentType($ShippingPaymentType)
    {
      $this->ShippingPaymentType = $ShippingPaymentType;
      return $this;
    }

    /**
     * @return Account2
     */
    public function getBillingAccountNumber()
    {
      return $this->BillingAccountNumber;
    }

    /**
     * @param Account2 $BillingAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Billing2
     */
    public function setBillingAccountNumber($BillingAccountNumber)
    {
      $this->BillingAccountNumber = $BillingAccountNumber;
      return $this;
    }

}
