<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * DimensionsType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class DimensionsType
{
    /**
     * @var int
     */
    protected $Length;

    /**
     * @var int
     */
    protected $Width;

    /**
     * @var int
     */
    protected $Height;

    /**
     * @param int $Length
     * @param int $Width
     * @param int $Height
     */
    public function __construct($Length, $Width, $Height)
    {
        $this->Length = $Length;
        $this->Width = $Width;
        $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param int $Length
     * @return self
     */
    public function setLength($Length)
    {
        $this->Length = $Length;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param int $Width
     * @return self
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param int $Height
     * @return self
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }
}
