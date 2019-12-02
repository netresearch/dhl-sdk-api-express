<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The PaymentInfo node details the potential terms of trade for this specific shipment,
 * and the schema itself defines the possible enumerated values for this field.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PaymentInfo implements ValueInterface
{
    /**
     * Possible payment info types.
     */
    const CFR = 'CFR';
    const CIF = 'CIF';
    const CIP = 'CIP';
    const CPT = 'CPT';
    const DAF = 'DAF';
    const DDP = 'DDP';
    const DDU = 'DDU';
    const DAP = 'DAP';
    const DEQ = 'DEQ';
    const DES = 'DES';
    const EXW = 'EXW';
    const FAS = 'FAS';
    const FCA = 'FCA';
    const FOB = 'FOB';

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
    public function __toString()
    {
        return $this->value;
    }
}
