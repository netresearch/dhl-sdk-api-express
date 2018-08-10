<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * RequestedPackagesType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RequestedPackagesType
{
    /**
     * @var float
     */
    protected $Weight;

    /**
     * @var DimensionsType
     */
    protected $Dimensions;

    /**
     * @var string
     */
    protected $CustomerReferences;

    /**
     * @var int
     */
    protected $number;

    /**
     * @param float $Weight
     * @param DimensionsType $Dimensions
     * @param string $CustomerReferences
     * @param int $number
     */
    public function __construct(float $Weight, DimensionsType $Dimensions, string $CustomerReferences, int $number)
    {
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->CustomerReferences = $CustomerReferences;
      $this->number = $number;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return self
     */
    public function setWeight(float $Weight): self
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return DimensionsType
     */
    public function getDimensions(): DimensionsType
    {
      return $this->Dimensions;
    }

    /**
     * @param DimensionsType $Dimensions
     * @return self
     */
    public function setDimensions(DimensionsType $Dimensions): self
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferences(): string
    {
      return $this->CustomerReferences;
    }

    /**
     * @param string $CustomerReferences
     * @return self
     */
    public function setCustomerReferences(string $CustomerReferences): self
    {
      $this->CustomerReferences = $CustomerReferences;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return self
     */
    public function setNumber(int $number): self
    {
      $this->number = $number;
      return $this;
    }
}
