<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A currency code type. ISO 3 character codes of the currency.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class CurrencyCode implements ValueInterface
{
    const NUMBER_OF_CHARS = 3;

    /**
     * The currency code.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($value)
    {
        if (\strlen($value) !== self::NUMBER_OF_CHARS) {
            throw new \InvalidArgumentException(
                'Invalid argument for ' . get_class($this) .
                ': The argument must be a three letter currency code'
            );
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
