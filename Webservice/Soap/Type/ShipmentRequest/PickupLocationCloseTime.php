<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * This node identifies the closing time of your pickup location in local time. It needs to be provided in
 * the following 24-hours time format: HH:mm
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PickupLocationCloseTime implements ValueInterface
{
    private const FORMAT = 'H:i';

    /**
     * The time.
     *
     * @var \DateTime
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     */
    public function __construct(string $value)
    {
        $dateTime = \DateTime::createFromFormat(self::FORMAT, $value);

        if ($dateTime !== false) {
            $this->value = $dateTime;
        } else {
            throw new \InvalidArgumentException('The argument must be in the format ' . self::FORMAT);
        }
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value->format(self::FORMAT);
    }
}
