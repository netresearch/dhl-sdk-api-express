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
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipTimestamp implements ValueInterface
{
    /**
     * The date/time.
     *
     * @var \DateTime
     */
    private $value;

    /**
     * Constructor.
     *
     * @param \DateTime $value The value
     */
    public function __construct(\DateTime $value)
    {
        $this->value = $value;
    }

    /**
     * Returns the formatted date/time value as string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->value->format('Y-m-d\TH:i:s \G\M\TP');
    }
}
