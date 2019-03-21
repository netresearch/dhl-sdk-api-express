<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * CommoditiesType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class CommoditiesType
{
    /**
     * @var int
     */
    protected $NumberOfPieces;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @param string $Description
     */
    public function __construct($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }

    /**
     * @param int $NumberOfPieces
     * @return self
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
        $this->NumberOfPieces = $NumberOfPieces;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return self
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
