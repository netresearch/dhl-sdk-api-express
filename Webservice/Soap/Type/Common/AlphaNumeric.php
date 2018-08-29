<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * An alpha numeric type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class AlphaNumeric implements ValueInterface
{
    const MIN_LENGTH = 1;
    const MAX_LENGTH = 999;

    /**
     * The value.
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
    public function __construct(string $value)
    {
        if (\strlen($value) < static::MIN_LENGTH) {
            throw new \InvalidArgumentException(
                'Only values with a minimum length of ' . static::MIN_LENGTH . ' characters are allowed'
            );
        }

        if (\strlen($value) > static::MAX_LENGTH) {
            throw new \InvalidArgumentException(
                'Only values with a maximum length of ' . static::MAX_LENGTH . ' characters are allowed'
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
