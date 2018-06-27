<?php
/**
 * See LICENSE.md for license details.
 */


namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\PackageInterface;

/**
 * Package.
 *
 * @package  Dhl\Express\Api
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
     * @var string
     */
    private $weightUOM;

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
     * @var string
     */
    private $dimensionsUOM;

    /**
     * @var string
     */
    private $readyAtDate;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $termsOfTrade;

    /**
     * Package constructor.
     * @param int $sequenceNumber
     * @param float $weight
     * @param string $weightUOM
     * @param float $length
     * @param float $width
     * @param float $height
     * @param string $dimensionsUOM
     * @param string $readyAtDate
     * @param string $contentType
     * @param string $termsOfTrade
     */
    public function __construct(
        int $sequenceNumber,
        float $weight,
        string $weightUOM,
        float $length,
        float $width,
        float $height,
        string $dimensionsUOM,
        string $readyAtDate,
        string $contentType,
        string $termsOfTrade)
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->weight = $weight;
        $this->weightUOM = $weightUOM;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->dimensionsUOM = $dimensionsUOM;
        $this->readyAtDate = $readyAtDate;
        $this->contentType = $contentType;
        $this->termsOfTrade = $termsOfTrade;
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
     * @return string
     */
    public function getWeightUOM(): string
    {
        return $this->weightUOM;
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

    /**
     * @return string
     */
    public function getDimensionsUOM(): string
    {
        return $this->dimensionsUOM;
    }

    /**
     * @return string
     */
    public function getReadyAtDate(): string
    {
        return $this->readyAtDate;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @return string
     */
    public function getTermsOfTrade(): string
    {
        return $this->termsOfTrade;
    }
}
