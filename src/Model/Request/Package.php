<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\PackageInterface;

/**
 * Package.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Package implements PackageInterface
{
    /**
     * Units of measurement (weight).
     */
    const UOM_WEIGHT_KG = 'KG';
    const UOM_WEIGHT_G = 'G';
    const UOM_WEIGHT_OZ = 'OZ';
    const UOM_WEIGHT_LB = 'LB';

    /**
     * Units of measurement (dimension).
     */
    const UOM_DIMENSION_CM = 'CM';
    const UOM_DIMENSION_IN = 'IN';
    const UOM_DIMENSION_MM = 'MM';
    const UOM_DIMENSION_M = 'M';
    const UOM_DIMENSION_FT = 'FT';
    const UOM_DIMENSION_YD = 'YD';

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
        $sequenceNumber,
        $weight,
        $weightUOM,
        $length,
        $width,
        $height,
        $dimensionsUOM,
        $customerReferences
    ) {
        $weightUOMs = [
            self::UOM_WEIGHT_KG,
            self::UOM_WEIGHT_G,
            self::UOM_WEIGHT_OZ,
            self::UOM_WEIGHT_LB,
        ];

        $dimensionUOMs = [
            self::UOM_DIMENSION_M,
            self::UOM_DIMENSION_CM,
            self::UOM_DIMENSION_MM,
            self::UOM_DIMENSION_IN,
            self::UOM_DIMENSION_YD,
            self::UOM_DIMENSION_FT,
        ];

        if (!\in_array($weightUOM, $weightUOMs, true)) {
            throw new \InvalidArgumentException('The weight UOM must be one of ' . implode(', ', $weightUOMs));
        }

        if (!\in_array($dimensionsUOM, $dimensionUOMs, true)) {
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
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getDimensionsUOM()
    {
        return $this->dimensionsUOM;
    }

    /**
     * @return string
     */
    public function getWeightUOM()
    {
        return $this->weightUOM;
    }

    /**
     * @return string
     */
    public function getCustomerReferences()
    {
        return $this->customerReferences;
    }
}
