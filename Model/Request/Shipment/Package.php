<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\PackageInterface;

/**
 * Package.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Package implements PackageInterface
{
    /**
     * Units of measurement (weight).
     */
    public const UOM_WEIGHT_KG = 'KG';
    public const UOM_WEIGHT_G = 'G';
    public const UOM_WEIGHT_OZ = 'OZ';
    public const UOM_WEIGHT_LB = 'LB';
    public const UOM_WEIGHT_KILOGRAM = 'KILOGRAM';
    public const UOM_WEIGHT_POUND = 'POUND';

    /**
     * Units of measurement (dimension).
     */
    public const UOM_DIMENSION_CM = 'CM';
    public const UOM_DIMENSION_IN = 'IN';
    public const UOM_DIMENSION_MM = 'MM';
    public const UOM_DIMENSION_M = 'M';
    public const UOM_DIMENSION_FT = 'FT';
    public const UOM_DIMENSION_YD = 'YD';
    public const UOM_DIMENSION_INCH = 'INCH';
    public const UOM_DIMENSION_CENTIMETER = 'CENTIMETER';

    /**
     * The number of the package in the list of all packages.
     *
     * @var int
     */
    private $sequenceNumber;

    /**
     * The weight of the package.
     *
     * @var float
     */
    private $weight;

    /**
     * The length of the package.
     *
     * @var float
     */
    private $length;

    /**
     * The width of the package.
     *
     * @var float
     */
    private $width;

    /**
     * The height of the package.
     *
     * @var float
     */
    private $height;

    /**
     * The unit of measurement for the package dimensions.
     *
     * @var string
     */
    private $dimensionsUOM;

    /**
     * The unit of measurement for the package weight.
     *
     * @var string
     */
    private $weightUOM;

    /**
     * The customers references.
     *
     * @var string
     */
    private $customerReferences;

    /**
     * Constructor.
     *
     * @param int    $sequenceNumber
     * @param float  $weight
     * @param string $weightUOM
     * @param float  $length
     * @param float  $width
     * @param float  $height
     * @param string $dimensionsUOM
     * @param string $customerReferences
     */
    public function __construct(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM,
        string $customerReferences
    ) {
        $weightUOMs = [
            self::UOM_WEIGHT_KG,
            self::UOM_WEIGHT_G,
            self::UOM_WEIGHT_OZ,
            self::UOM_WEIGHT_LB,
            self::UOM_WEIGHT_KILOGRAM,
            self::UOM_WEIGHT_POUND,
        ];

        $dimensionUOMs = [
            self::UOM_DIMENSION_M,
            self::UOM_DIMENSION_CM,
            self::UOM_DIMENSION_MM,
            self::UOM_DIMENSION_IN,
            self::UOM_DIMENSION_YD,
            self::UOM_DIMENSION_FT,
            self::UOM_DIMENSION_CENTIMETER,
            self::UOM_DIMENSION_INCH,
        ];

        if (!in_array($weightUOM, $weightUOMs)) {
            throw new \InvalidArgumentException('The weight UOM must be one of ' . implode(', ', $weightUOMs));
        }

        if (!in_array($dimensionsUOM, $dimensionUOMs)) {
            throw new \InvalidArgumentException('The dimension UOM must be one of ' . implode(', ', $dimensionUOMs));
        }

        $this->sequenceNumber     = $sequenceNumber;
        $this->weight             = $weight;
        $this->weightUOM          = $weightUOM;
        $this->length             = $length;
        $this->width              = $width;
        $this->height             = $height;
        $this->dimensionsUOM      = $dimensionsUOM;
        $this->customerReferences = $customerReferences;
    }

    /**
     * @return int
     */
    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getDimensionsUOM(): string
    {
        return $this->dimensionsUOM;
    }

    /**
     * @return string
     */
    public function getWeightUOM(): string
    {
        return $this->weightUOM;
    }

    /**
     * @return string
     */
    public function getCustomerReferences(): string
    {
        return $this->customerReferences;
    }
}
