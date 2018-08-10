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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(int $Length, int $Width, int $Height)
    {
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
      return $this->Length;
    }

    /**
     * @param int $Length
     * @return self
     */
    public function setLength(int $Length): self
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return self
     */
    public function setWidth(int $Width): self
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return self
     */
    public function setHeight($Height): self
    {
      $this->Height = $Height;
      return $this;
    }
}
