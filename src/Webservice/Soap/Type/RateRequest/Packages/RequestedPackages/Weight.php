<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;

/**
 * The weight of the package.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Weight
{
    /**
     * The value.
     *
     * @var float
     */
    private $Value;

    /**
     * Constructor.
     *
     * @param float $value The value
     */
    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Returns the value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets the value.
     *
     * @param float $value The value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
}
