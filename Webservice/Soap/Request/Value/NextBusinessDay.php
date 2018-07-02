<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The NextBusinessDay field is used to indicate that the Rate Request process should query the next business
 * day for available services if the current request is beyond cutoff, or occurs on a weekend or holiday. There
 * are three possible use cases for this field.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class NextBusinessDay implements ValueInterface
{
    private const NUMBER_OF_CHARS = 1;

    /**
     * This case will provide services for the subsequent business day, if available.
     *
     * @var string
     */
    public const Y  = 'Y';

    /**
     * In this case, the process will filter out any services which has a pickup date <> to the requested ship
     * date. For example, if the requested shipment date is a Monday, but the next available pickup date is a
     * Tuesday, this option will not present these services.
     *
     * @var string|null
     */
    public const N = 'N';

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
     * @throws \InvalidArgumentException
     */
    public function __construct($value = self::N)
    {
        if ((strlen($value) !== self::NUMBER_OF_CHARS)
            || !in_array($value, [self::N, self::Y])
        ) {
            throw new \InvalidArgumentException('Argument must be either "N" or "Y"');
        }

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
