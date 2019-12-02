<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\Type\Common\Billing\ShippingPaymentType;

/**
 * The Billing structure functions as a more robust alternative to the single Account field, and allows for
 * using a payer account different than the shipper account (to allow for bill-to receiver or bill-to third party).
 * The web service requester should use either the Account field or the Billing structure to communicate account
 * information, and DHL recommends the Billing structure.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
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
     * @var ShippingPaymentType
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
     * @param string $billingAccountNumber The billing account number (Required if payment type is R or T)
     * @throws \InvalidArgumentException
     *
     */
    public function __construct($shipperAccountNumber, $shippingPaymentType, $billingAccountNumber = null)
    {
        $this->setShipperAccountNumber($shipperAccountNumber)
            ->setShippingPaymentType($shippingPaymentType);

        if (empty($billingAccountNumber)
            && \in_array($shippingPaymentType, [ShippingPaymentType::R, ShippingPaymentType::T ], true)
        ) {
            throw new \InvalidArgumentException(
                'The billing account number is required for payment type "' . $shippingPaymentType . '"'
            );
        }

        if (!empty($billingAccountNumber)) {
            $this->setBillingAccountNumber($billingAccountNumber);
        }
    }

    /**
     * Returns the shipper account number.
     *
     * @return Account
     */
    public function getShipperAccountNumber()
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * Sets the shipper account number.
     *
     * @param string $shipperAccountNumber The shipper account number
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setShipperAccountNumber($shipperAccountNumber)
    {
        $this->ShipperAccountNumber = new Account($shipperAccountNumber);
        return $this;
    }

    /**
     * Returns the shipment payment type.
     *
     * @return ShippingPaymentType
     */
    public function getShippingPaymentType()
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
    public function setShippingPaymentType($shippingPaymentType)
    {
        $this->ShippingPaymentType = new ShippingPaymentType($shippingPaymentType);
        return $this;
    }

    /**
     * Returns the billing account number.
     *
     * @return null|Account
     */
    public function getBillingAccountNumber()
    {
        return $this->BillingAccountNumber;
    }

    /**
     * Sets the billing account number.
     *
     * @param string $billingAccountNumber The billing account number
     *
     * @return self
     */
    public function setBillingAccountNumber($billingAccountNumber)
    {
        $this->BillingAccountNumber = new Account($billingAccountNumber);
        return $this;
    }
}
