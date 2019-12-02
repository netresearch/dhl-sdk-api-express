<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Billing;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The shipping payment type.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShippingPaymentType implements ValueInterface
{
    /**
     * Shipping payment types.
     *
     * Possible values:
     * - S (use ShipperAccountNumber as payer)
     * - R (use BillingAccountNumber as bill-to receiver account number)
     * - T (use BillingAccountNumber as bill-to third party account number)
     *
     * Please note if you use value R or T in this tag then the next tag <BillingAccountNumber> is also mandatory
     */
    const S = 'S';
    const R = 'R';
    const T = 'T';

    /**
     * The value.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     */
    public function __construct($value = self::S)
    {
        if (!\in_array($value, [self::S, self::R, self::T], true)) {
            throw new \InvalidArgumentException('Argument must be either "S", "R" or "T"');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
