<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The shipment payment type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentPaymentType implements ValueInterface
{
    /**
     * Shipment payment types.
     *
     * Possible values:
     * - S (use ShipperAccountNumber as payer)
     * - R (use BillingAccountNumber as bill-to receiver account number)
     * - T (use BillingAccountNumber as bill-to third party account number) PAGE 19 OF 163
     *
     * Please note if you use value R or T in this tag then the next tag <BillingAccountNumber> is also mandatory
     */
    public const S = 'S';
    public const R = 'R';
    public const T = 'T';

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
        if ((strlen($value) !== 1)
            || !in_array($value, [self::S, self::R, self::T])
        ) {
            throw new \InvalidArgumentException('Argument must be either "S", "R" or "T"');
        }

        $this->value = $value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value;
    }
}
