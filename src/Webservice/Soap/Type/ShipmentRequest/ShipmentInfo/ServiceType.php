<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The ServiceType is a required field which corresponds to the DHL global product code, which describes the
 * product requested for this shipment. These product codes are available as output from Rate Request, and the
 * product codes provided will be validated against the origin-destination requested in the Shipment Request.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ServiceType implements ValueInterface
{
    const NUMBER_OF_CHARS = 1;

    /**
     * Available service types.
     */
    const TYPE_INSURANCE = 'II';

    /**
     * The service type.
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
    public function __construct($value)
    {
        if (\strlen($value) !== self::NUMBER_OF_CHARS) {
            throw new \InvalidArgumentException('The argument must be a single letter service type');
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
