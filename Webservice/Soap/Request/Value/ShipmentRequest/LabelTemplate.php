<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A label template.
 *
 * Any valid DHL Express label template (please contact your DHL Express IT representative for a list of labels)
 * – If this node is left blank then the default DHL ecommerce label template will be used.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class LabelTemplate implements ValueInterface
{
    private const MAX_CHARS = 20;

    /**
     * The label template.
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
            throw new \InvalidArgumentException('Only values with a maximum of 20 characters are allowed');
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
