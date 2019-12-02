<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The state or province code type. 2 letter state code for the USA only.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class StateOrProvinceCode implements ValueInterface
{
    const NUMBER_OF_CHARS = 2;

    /**
     * The state or province code.
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
            throw new \InvalidArgumentException('The argument must be a two letter state code');
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
