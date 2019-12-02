<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * An numeric type.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Numeric implements ValueInterface
{
    /**
     * The value.
     *
     * @var int
     */
    private $value;

    /**
     * Constructor.
     *
     * @param int $value The value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the value.
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }
}
