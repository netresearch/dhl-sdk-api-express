<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class Billing
{

    /**
     * @var Account $ShipperAccountNumber
     */
    protected $ShipperAccountNumber;

    /**
     * @var ShipmentPaymentType $ShippingPaymentType
     */
    protected $ShippingPaymentType;

    /**
     * @var Account $BillingAccountNumber
     */
    protected $BillingAccountNumber;

    /**
     * @param Account $ShipperAccountNumber
     * @param ShipmentPaymentType $ShippingPaymentType
     */
    public function __construct($ShipperAccountNumber, $ShippingPaymentType)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        $this->ShippingPaymentType = $ShippingPaymentType;
    }

    /**
     * @return Account
     */
    public function getShipperAccountNumber()
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * @param Account $ShipperAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\Billing
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        return $this;
    }

    /**
     * @return ShipmentPaymentType
     */
    public function getShippingPaymentType()
    {
        return $this->ShippingPaymentType;
    }

    /**
     * @param ShipmentPaymentType $ShippingPaymentType
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\Billing
     */
    public function setShippingPaymentType($ShippingPaymentType)
    {
        $this->ShippingPaymentType = $ShippingPaymentType;
        return $this;
    }

    /**
     * @return Account
     */
    public function getBillingAccountNumber()
    {
        return $this->BillingAccountNumber;
    }

    /**
     * @param Account $BillingAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\Billing
     */
    public function setBillingAccountNumber($BillingAccountNumber)
    {
        $this->BillingAccountNumber = $BillingAccountNumber;
        return $this;
    }
}
