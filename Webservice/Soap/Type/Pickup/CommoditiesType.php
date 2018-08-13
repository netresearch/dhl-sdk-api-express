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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(string $Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces(): int
    {
        return $this->NumberOfPieces;
    }

    /**
     * @param int $NumberOfPieces
     * @return self
     */
    public function setNumberOfPieces(int $NumberOfPieces): self
    {
        $this->NumberOfPieces = $NumberOfPieces;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return self
     */
    public function setDescription(string $Description): self
    {
        $this->Description = $Description;
        return $this;
    }
}
