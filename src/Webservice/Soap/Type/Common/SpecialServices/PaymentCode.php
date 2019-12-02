<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A payment code type.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PaymentCode implements ValueInterface
{
    const NUMBER_OF_CHARS = 3;

    /**
     * The country code.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     *
     */
    public function __construct($value)
    {
        if (\strlen($value) !== self::NUMBER_OF_CHARS) {
            throw new \InvalidArgumentException('The argument must be a three letter payment code');
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
