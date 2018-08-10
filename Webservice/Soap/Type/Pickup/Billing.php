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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(string $ShipperAccountNumber, string $ShippingPaymentType)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        $this->ShippingPaymentType = $ShippingPaymentType;
    }

    /**
     * @return string
     */
    public function getShipperAccountNumber(): string
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * @param string $ShipperAccountNumber
     * @return self
     */
    public function setShipperAccountNumber(string $ShipperAccountNumber): self
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingPaymentType(): string
    {
        return $this->ShippingPaymentType;
    }

    /**
     * @param string $ShippingPaymentType
     * @return self
     */
    public function setShippingPaymentType(string $ShippingPaymentType): self
    {
        $this->ShippingPaymentType = $ShippingPaymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAccountNumber(): string
    {
        return $this->BillingAccountNumber;
    }

    /**
     * @param string $BillingAccountNumber
     * @return self
     */
    public function setBillingAccountNumber(string $BillingAccountNumber): self
    {
        $this->BillingAccountNumber = $BillingAccountNumber;
        return $this;
    }
}
