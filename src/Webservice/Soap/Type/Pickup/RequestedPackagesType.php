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
    public function __construct($Weight, DimensionsType $Dimensions, $CustomerReferences, $number)
    {
        $this->Weight = $Weight;
        $this->Dimensions = $Dimensions;
        $this->CustomerReferences = $CustomerReferences;
        $this->number = $number;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return self
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }

    /**
     * @return DimensionsType
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * @param DimensionsType $Dimensions
     * @return self
     */
    public function setDimensions(DimensionsType $Dimensions)
    {
        $this->Dimensions = $Dimensions;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }

    /**
     * @param string $CustomerReferences
     * @return self
     */
    public function setCustomerReferences($CustomerReferences)
    {
        $this->CustomerReferences = $CustomerReferences;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
