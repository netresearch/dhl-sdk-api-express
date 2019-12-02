<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A date.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Date implements ValueInterface
{
    /**
     * Output format.
     */
    const FORMAT = 'Y-m-d';

    /**
     * The date.
     *
     * @var \DateTime
     */
    private $value;

    /**
     * Constructor.
     *
     * @param int|string|\DateTime $date Date value, either as timestamp, date string or \DateTime instance
     *
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function __construct($date)
    {
        // DateTime instance
        if ($date instanceof \DateTime) {
            $this->value = $date;

            // Timestamp
        } elseif (\is_int($date)) {
            /** @var \DateTime $dateTime */
            $dateTime = new \DateTime();
            $dateTime->setTimestamp($date);

            $this->value = $dateTime;

            // Formatted date/time
        } elseif (\is_string($date)) {
            if (!$this->validateDateTime($date)) {
                throw new \InvalidArgumentException(
                    'Invalid date given. Required format: YYYY-MM-DD'
                );
            }

            $value = \DateTime::createFromFormat(self::FORMAT, $date);
            if (\is_bool($value)) {
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

        // Remove time component
        if ($this->value instanceof \DateTime) {
            $this->value->setTime(0, 0);
        }
    }

    /**
     * Validates the given date/time string against the required format.
     *
     * @param string $date The time to validate
     *
     * @return bool
     */
    private function validateDateTime($date)
    {
        $dateTime = \DateTime::createFromFormat(self::FORMAT, $date);

        return $dateTime && ($dateTime->format(self::FORMAT) === $date);
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
