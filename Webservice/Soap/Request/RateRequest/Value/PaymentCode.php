<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\\Request\RateRequest\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A payment code type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PaymentCode implements ValueInterface
{
    private const NUMBER_OF_CHARS = 3;

    /**
     * The country code.
     *
     * @var null|string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param null|string $value The value
     */
    public function __construct(?string $value)
    {
        if (strlen($value) !== self::NUMBER_OF_CHARS) {
            throw new \InvalidArgumentException('The argument must be a three letter payment code');
        }

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
