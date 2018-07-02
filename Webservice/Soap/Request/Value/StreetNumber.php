<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The street number type. Alpha numeric type with 15 characters.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class StreetNumber implements ValueInterface
{
    private const MAX_CHARS = 15;

    /**
     * The street number.
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
        if (strlen($value) > self::MAX_CHARS) {
            throw new \InvalidArgumentException('Only values with a maximum of 35 characters are allowed');
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
