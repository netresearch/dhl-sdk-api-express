<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * A LWN type code. Mandatory if the delivery option is SW.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class LWNTypeCode implements ValueInterface
{
    /**
     * Leave with neighbour.
     *
     * @var string
     */
    const N = 'N';

    /**
     * Leave with concierge.
     *
     * @var string
     */
    const C  = 'C';

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
     */
    public function __construct($value = self::N)
    {
        if (!\in_array($value, [self::N, self::C], true)) {
            throw new \InvalidArgumentException('Argument must be either "N" or "C"');
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
