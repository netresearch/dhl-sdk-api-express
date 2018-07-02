<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The use own shipment identification number flag.
 *
 * Y or 1 -= allows you to define your own AWB in the tag below
 * N or 0 = Auto-allocates the AWB from DHL Express
 *
 * You can request your own AWB range from your DHL Express IT consultant and store these locally in your integration
 * however this is not needed as if you leave this tag then DHL will automatically assign the AWB centrally.
 * In addition this special function needs to be enabled for your username by your DHL Express IT Consultant.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class UseOwnShipmentIdentificationNumber implements ValueInterface
{
    private const NUMBER_OF_CHARS = 1;

    /**
     * Yes,
     *
     * @var string
     */
    public const Y  = 'Y';

    /**
     * No.
     *
     * @var string
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
