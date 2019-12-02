<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A dimension value.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Dimension implements ValueInterface
{
    /**
     * The value.
     *
     * @var float
     */
    private $value;

    /**
     * Constructor.
     *
     * @param float $value The value
     *
     */
    public function __construct($value)
    {
        if ($value < 0.5) {
            throw new \InvalidArgumentException('Argument must be equal or greater than 1');
        }

        $this->value = $value;
    }

    /**
     * Returns the value.
     *
     * @return float
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
        return (string) $this->getValue();
    }
}
