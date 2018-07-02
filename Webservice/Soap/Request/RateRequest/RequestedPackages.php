<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\RateRequest;

/**
 * A requested package.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * @param int        $number     Package number
     */
    public function __construct(float $weight, Dimensions $dimensions, int $number)
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
    public function getWeight(): Weight
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
    public function setWeight(float $weight): RequestedPackages
    {
        $this->Weight = new Weight($weight);
        return $this;
    }

    /**
     * Returns the dimensions.
     *
     * @return Dimensions
     */
    public function getDimensions(): Dimensions
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
    public function setDimensions(Dimensions $dimensions): RequestedPackages
    {
        $this->Dimensions = $dimensions;
        return $this;
    }

    /**
     * Returns the number.
     *
     * @return int
     */
    public function getNumber(): int
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
    public function setNumber($number): RequestedPackages
    {
        $this->number = $number;
        return $this;
    }
}
