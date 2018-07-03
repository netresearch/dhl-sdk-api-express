<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The label type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     */
    public function __construct($value = self::PDF)
    {
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
