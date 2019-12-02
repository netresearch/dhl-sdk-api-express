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
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PickupLocationCloseTime implements ValueInterface
{
    const FORMAT = 'H:i';

    /**
     * The time.
     *
     * @var \DateTime
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The time value
     *
     */
    public function __construct($value)
    {
        if (!$this->validateDateTime($value)) {
            throw new \InvalidArgumentException('The argument must be in the format ' . self::FORMAT);
        }

        $value = \DateTime::createFromFormat(self::FORMAT, $value);
        if (\is_bool($value)) {
            throw new \InvalidArgumentException(
                'Invalid data given. Either pass valid date/time string.'
            );
        }

        $this->value = $value;
    }

    /**
     * Validates the given date/time string against the required format.
     *
     * @param string $time The time to validate
     *
     * @return bool
     */
    private function validateDateTime($time)
    {
        $dateTime = \DateTime::createFromFormat(self::FORMAT, $time);

        return $dateTime && ($dateTime->format(self::FORMAT) === $time);
    }

    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value->format(self::FORMAT);
    }
}
