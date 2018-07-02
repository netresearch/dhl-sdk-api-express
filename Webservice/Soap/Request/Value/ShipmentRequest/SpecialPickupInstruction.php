<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * This node details special pickup instructions you may wish to send to the DHL Courier.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SpecialPickupInstruction implements ValueInterface
{
    private const MAX_CHARS = 75;

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
     */
    public function __construct(string $value)
    {
        if (strlen($value) > self::MAX_CHARS) {
            throw new \InvalidArgumentException('Only values with a maximum of 75 characters are allowed');
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
