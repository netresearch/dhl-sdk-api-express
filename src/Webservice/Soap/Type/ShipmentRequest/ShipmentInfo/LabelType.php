<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The label type.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class LabelType implements ValueInterface
{
    /**
     * Possible label types.
     */
    const PDF = 'PDF';
    const ZPL = 'ZPL';
    const EPL = 'EPL';
    const LP2 = 'LP2';

    /**
     * The value of label type.
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
    public function __construct($value = self::PDF)
    {
        if (!\in_array($value, [self::PDF, self::ZPL, self::EPL, self::LP2], true)) {
            throw new \InvalidArgumentException('Argument must be either "PDF", "ZPL", "EPL" or "LP2"');
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
