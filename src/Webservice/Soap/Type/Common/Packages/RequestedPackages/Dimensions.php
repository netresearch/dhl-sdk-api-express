<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages;

/**
 * The package dimensions.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
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
    public function __construct($length, $width, $height)
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
    public function getLength()
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
    public function setLength($length)
    {
        $this->Length = new Dimension($length);
        return $this;
    }

    /**
     * Returns the width of the piece listed.
     *
     * @return Dimension
     */
    public function getWidth()
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
    public function setWidth($width)
    {
        $this->Width = new Dimension($width);
        return $this;
    }

    /**
     * Returns the height of the piece listed.
     *
     * @return Dimension
     */
    public function getHeight()
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
    public function setHeight($height)
    {
        $this->Height = new Dimension($height);
        return $this;
    }
}
