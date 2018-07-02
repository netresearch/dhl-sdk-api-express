<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\PackageInterface;

/**
 * Package.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Package implements PackageInterface
{
    /**
     * @var int
     */
    private $sequenceNumber;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * Package constructor.
     * @param int $sequenceNumber
     * @param float $weight
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(
        int $sequenceNumber,
        float $weight,
        float $length,
        float $width,
        float $height
    ) {
        $this->sequenceNumber = $sequenceNumber;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
}
