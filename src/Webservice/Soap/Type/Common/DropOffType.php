<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The DropOffType is used to indicate whether a scheduled pickup is required as part of the consideration for the
 * rate request. There are two possible values to indicate whether a pickup is considered.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class DropOffType implements ValueInterface
{
    /**
     * The pickup location is already served by a regular courier and an additional pickup does
     * not need to be considered for this service.
     *
     * @var string
     */
    const REGULAR_PICKUP  = 'REGULAR_PICKUP';

    /**
     * The rating response returns products for which the pickup capability is given, based on ShipmentTimeStamp.
     *
     * @var string
     */
    const REQUEST_COURIER = 'REQUEST_COURIER';

    /**
     * The drop off type.
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $value The value
     *
     */
    public function __construct($value = self::REGULAR_PICKUP)
    {
        if (!\in_array($value, [self::REGULAR_PICKUP, self::REQUEST_COURIER], true)) {
            throw new \InvalidArgumentException('Argument must be either "REGULAR_PICKUP" or "REQUEST_COURIER"');
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
