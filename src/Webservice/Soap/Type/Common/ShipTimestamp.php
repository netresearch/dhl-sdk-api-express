<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A ship timestamp value.
 *
 * Identifies the date and time the package is tendered. Both the date and time portions of
 * the string are expected to be used. The date should not be a past date or a date more than 10 days in the
 * future. The time is the local time of the shipment based on the shipper's time zone. The date component
 * must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour
 * clock. The date and time parts are separated by the letter T (e.g. 2010-02-05T14:00:00 GMT+01:00).
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipTimestamp implements ValueInterface
{
    /**
     * Output format.
     */
    const FORMAT = 'Y-m-d\TH:i:s \G\M\TP';

    /**
     * The date/time.
     *
     * @var \DateTime
     */
    private $value;

    /**
     * Constructor.
     *
     * @param int|string|\DateTime $time Date/time value, either as timestamp, date string or \DateTime instance
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function __construct($time)
    {
        // DateTime instance
        if ($time instanceof \DateTime) {
            $this->value = $time;

        // Timestamp
        } elseif (\is_int($time)) {
            $dateTime = new \DateTime();
            $dateTime->setTimestamp($time);

            $this->value = $dateTime;

        // Formatted date/time
        } elseif (\is_string($time)) {
            if (!$this->validateDateTime($time)) {
                throw new \InvalidArgumentException(
                    'Invalid date given. Required format: YYYY-MM-DDTHH:MM:SS GMT+k'
                );
            }
            $value = \DateTime::createFromFormat(self::FORMAT, $time);
            if (is_bool($value)) {
                throw new \InvalidArgumentException(
                    'Invalid date given. Either pass valid date/time string, timestamp or instance of \DateTime'
                );
            }
            $this->value = $value;

        // Invalid date/time
        } else {
            throw new \InvalidArgumentException(
                'Invalid date given. Either pass valid date/time string, timestamp or instance of \DateTime'
            );
        }
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
     * Returns the formatted date/time value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value->format(self::FORMAT);
    }
}
