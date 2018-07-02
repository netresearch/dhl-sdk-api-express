<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The shipment identification number does not need to be transmitted in the request as the operation will assign
 * a new number and return it in the response. Only used when UseOwnShipmentdentificationNumber set to Y and this
 * feature enabled within client profile.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentIdentificationNumber implements ValueInterface
{
    private const NUMBER_OF_CHARS = 1;

    /**
     * Yes,
     *
     * @var string
     */
    public const Y  = 'Y';

    /**
     * No.
     *
     * @var string
     */
    public const N = 'N';

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
    public function __construct($value = self::N)
    {
        if ((strlen($value) !== self::NUMBER_OF_CHARS)
            || !in_array($value, [self::N, self::Y])
        ) {
            throw new \InvalidArgumentException('Argument must be either "N" or "Y"');
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
