<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * Billing class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Billing
{
    /**
     * @var string
     */
    protected $ShipperAccountNumber;

    /**
     * @var string
     */
    protected $ShippingPaymentType;

    /**
     * @var string
     */
    protected $BillingAccountNumber;

    /**
     * @param string $ShipperAccountNumber
     * @param string $ShippingPaymentType
     */
    public function __construct($ShipperAccountNumber, $ShippingPaymentType)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        $this->ShippingPaymentType = $ShippingPaymentType;
    }

    /**
     * @return string
     */
    public function getShipperAccountNumber()
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * @param string $ShipperAccountNumber
     * @return self
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingPaymentType()
    {
        return $this->ShippingPaymentType;
    }

    /**
     * @param string $ShippingPaymentType
     * @return self
     */
    public function setShippingPaymentType($ShippingPaymentType)
    {
        $this->ShippingPaymentType = $ShippingPaymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAccountNumber()
    {
        return $this->BillingAccountNumber;
    }

    /**
     * @param string $BillingAccountNumber
     * @return self
     */
    public function setBillingAccountNumber($BillingAccountNumber)
    {
        $this->BillingAccountNumber = $BillingAccountNumber;
        return $this;
    }
}
