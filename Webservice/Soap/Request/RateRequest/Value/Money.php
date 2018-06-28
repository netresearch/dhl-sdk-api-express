<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A monetary value.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Money implements ValueInterface
{
    /**
     * The country code.
     *
     * @var null|float
     */
    private $value;

    /**
     * Constructor.
     *
     * @param null|float $value The value
     */
    public function __construct(?float $value)
    {
        $this->value = $value;
    }

    /**
     * Returns the value.
     *
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getValue();
    }
}
