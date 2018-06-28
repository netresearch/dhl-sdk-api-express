<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The PaymentInfo node details the potential terms of trade for this specific shipment, and the schema itself defines the possible enumerated values for this field.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PaymentInfo implements ValueInterface
{
    /**
     * Possible payment info types.
     */
    public const CFR = 'CFR';
    public const CIF = 'CIF';
    public const CIP = 'CIP';
    public const CPT = 'CPT';
    public const DAF = 'DAF';
    public const DDP = 'DDP';
    public const DDU = 'DDU';
    public const DAP = 'DAP';
    public const DEQ = 'DEQ';
    public const DES = 'DES';
    public const EXW = 'EXW';
    public const FAS = 'FAS';
    public const FCA = 'FCA';
    public const FOB = 'FOB';

    /**
     * The value of payment info.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     */
    public function __construct($value = self::CFR)
    {
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
