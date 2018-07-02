<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest;

use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\Account;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\ShipmentPaymentType;

/**
 * The Billing structure functions as a more robust alternative to the single Account field, and allows for
 * using a payer account different than the shipper account (to allow for bill-to receiver or bill-to third party).
 * The web service requestor should use either the Account field or the Billing structure to communicate account
 * information, and DHL recommends the Billing structure.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Billing
{
    /**
     * The DHL account number used for the shipment. Used as the shipper account number.
     *
     * @var Account
     */
    private $ShipperAccountNumber;

    /**
     * The shipment payment type. Please note if you use value R or T in this tag then the next
     * tag <BillingAccountNumber> is also mandatory.
     *
     * @var ShipmentPaymentType 
     */
    private $ShippingPaymentType;

    /**
     * The DHL account number used for the shipment, if ShippingPaymentType is equal to R or T.
     *
     * @var null|Account
     */
    private $BillingAccountNumber;

    /**
     * Constructor.
     *
     * @param string $shipperAccountNumber The shipper account number
     * @param string $shippingPaymentType  The shipping payment type
     */
    public function __construct(string $shipperAccountNumber, string $shippingPaymentType)
    {
        $this->setShipperAccountNumber($shipperAccountNumber)
            ->setShippingPaymentType($shippingPaymentType);
    }

    /**
     * Returns the shipper account number.
     *
     * @return Account
     */
    public function getShipperAccountNumber(): Account
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * Sets the shipper account number.
     *
     * @param string $shipperAccountNumber The shipper account number
     *
     * @return self
     */
    public function setShipperAccountNumber(string $shipperAccountNumber): Billing
    {
        $this->ShipperAccountNumber = new Account($shipperAccountNumber);
        return $this;
    }

    /**
     * Returns the shipment payment type.
     *
     * @return ShipmentPaymentType
     */
    public function getShippingPaymentType(): ShipmentPaymentType
    {
        return $this->ShippingPaymentType;
    }

    /**
     * Sets the shipment payment type.
     *
     * @param string $shippingPaymentType The shipment payment type.
     *
     * @return self
     */
    public function setShippingPaymentType(string $shippingPaymentType): Billing
    {
        $this->ShippingPaymentType = new ShipmentPaymentType($shippingPaymentType);
        return $this;
    }

    /**
     * Returns the billing account number.
     *
     * @return null|Account
     */
    public function getBillingAccountNumber(): ?Account
    {
        return $this->BillingAccountNumber;
    }

    /**
     * Sets the billing account number.
     * 
     * @param null|string $billingAccountNumber The billing account number
     *                                      
     * @return self
     */
    public function setBillingAccountNumber(?string $billingAccountNumber): Billing
    {
        $this->BillingAccountNumber = new Account($billingAccountNumber);
        return $this;
    }
}
