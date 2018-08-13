<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages;

/**
 * The package dimensions.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Dimensions
{
    /**
     * Length of the piece listed.
     *
     * @var Dimension
     */
    private $Length;

    /**
     * Width of the piece listed.
     *
     * @var Dimension
     */
    private $Width;

    /**
     * Height of the piece listed.
     *
     * @var Dimension
     */
    private $Height;

    /**
     * Constructor.
     *
     * @param float $length The length of the package
     * @param float $width  The width of the package
     * @param float $height The height of the package
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length)
            ->setWidth($width)
            ->setHeight($height);
    }

    /**
     * Returns the length of the piece listed.
     *
     * @return Dimension
     */
    public function getLength(): Dimension
    {
        return $this->Length;
    }

    /**
     * Sets the length of the piece listed.
     *
     * @param float $length The length of the piece listed
     *
     * @return self
     */
    public function setLength(float $length): Dimensions
    {
        $this->Length = new Dimension($length);
        return $this;
    }

    /**
     * Returns the width of the piece listed.
     *
     * @return Dimension
     */
    public function getWidth(): Dimension
    {
        return $this->Width;
    }

    /**
     * Sets the width of the piece listed.
     *
     * @param float $width The width of the piece listed
     *
     * @return self
     */
    public function setWidth(float $width): Dimensions
    {
        $this->Width = new Dimension($width);
        return $this;
    }

    /**
     * Returns the height of the piece listed.
     *
     * @return Dimension
     */
    public function getHeight(): Dimension
    {
        return $this->Height;
    }

    /**
     * Sets the height of the piece listed.
     *
     * @param float $height The height of the piece listed
     *
     * @return self
     */
    public function setHeight(float $height): Dimensions
    {
        $this->Height = new Dimension($height);
        return $this;
    }
}
