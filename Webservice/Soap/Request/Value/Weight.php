<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

/**
 * The weight of the package.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(float $value)
    {
        $this->setValue($value);
    }

    /**
     * Returns the value.
     *
     * @return float
     */
    public function getValue(): float
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
    public function setValue(float $value): Weight
    {
        $this->Value = $value;
        return $this;
    }
}
