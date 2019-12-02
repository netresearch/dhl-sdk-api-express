<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateRequest\Packages;

use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages\Weight;

/**
 * A requested package.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RequestedPackages
{
    /**
     * Sum of the weight of the individual pieces/packages the rating request is for.
     *
     * @var Weight
     */
    private $Weight;

    /**
     * Dimensions of the package.
     *
     * @var Dimensions
     */
    private $Dimensions;

    /**
     * Will be used as Piece Sequence number and returned in the response.
     *
     * @var int
     */
    private $number;

    /**
     * Constructor.
     *
     * @param float      $weight     The weight of the package
     * @param Dimensions $dimensions The dimensions of the package
     * @param int        $number     The package number
     */
    public function __construct($weight, Dimensions $dimensions, $number)
    {
        $this->setWeight($weight)
            ->setDimensions($dimensions)
            ->setNumber($number);
    }

    /**
     * Returns the weight.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * Sets the weight.
     *
     * @param float $weight The weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->Weight = new Weight($weight);
        return $this;
    }

    /**
     * Returns the dimensions.
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * Sets the dimensions.
     *
     * @param Dimensions $dimensions The dimensions
     *
     * @return self
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }

    /**
     * Returns the number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number.
     *
     * @param int $number The number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
