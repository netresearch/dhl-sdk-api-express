<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common;

use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The unit of measurement for the dimensions of the package.
 *
 * SI = the preferred system of weights and measures for Italian trade and commerce;
 * SU = the preferred system of weights and measures for U.S. trade and commerce;
 *
 * Weight unit: if Type is SI it can be KG (kilograms), if Type is SU it can be LB (pounds).
 * Dimension unit: if Type is SI it can be CM, if Type is SU it can be IN (inch)
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class UnitOfMeasurement implements ValueInterface
{
    /**
     * International metric system (KG, CM).
     *
     * @var string
     */
    const SI  = 'SI';

    /**
     * UK, US system of measurement (LB, IN).
     *
     * @var string
     */
    const SU = 'SU';

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
    public function __construct($value = self::SI)
    {
        if (!\in_array($value, [self::SI, self::SU], true)) {
            throw new \InvalidArgumentException('Argument must be either "SU" or "SI"');
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
