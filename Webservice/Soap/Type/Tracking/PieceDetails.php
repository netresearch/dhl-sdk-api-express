<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceDetails class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PieceDetails
{
    /**
     * @var string
     */
    protected $AWBNumber;

    /**
     * @var string
     */
    protected $LicensePlate;

    /**
     * @var string
     */
    protected $PieceNumber;

    /**
     * @var string
     */
    protected $ActualDepth;

    /**
     * @var string
     */
    protected $ActualWidth;

    /**
     * @var string
     */
    protected $ActualHeight;

    /**
     * @var string
     */
    protected $ActualWeight;

    /**
     * @var string
     */
    protected $Depth;

    /**
     * @var string
     */
    protected $Width;

    /**
     * @var string
     */
    protected $Height;

    /**
     * @var string
     */
    protected $Weight;

    /**
     * @var string
     */
    protected $PackageType;

    /**
     * @var string
     */
    protected $DimWeight;

    /**
     * @var string
     */
    protected $WeightUnit;

    /**
     * @var string
     */
    protected $PieceContents;

    /**
     * @param string $AWBNumber
     * @param string $LicensePlate
     */
    public function __construct(string $AWBNumber, string $LicensePlate)
    {
        $this->AWBNumber = $AWBNumber;
        $this->LicensePlate = $LicensePlate;
    }

    /**
     * @return string
     */
    public function getAWBNumber(): string
    {
        return $this->AWBNumber;
    }

    /**
     * @param string $AWBNumber
     * @return self
     */
    public function setAWBNumber(string $AWBNumber): self
    {
        $this->AWBNumber = $AWBNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicensePlate(): string
    {
        return $this->LicensePlate;
    }

    /**
     * @param string $LicensePlate
     * @return self
     */
    public function setLicensePlate(string $LicensePlate): self
    {
        $this->LicensePlate = $LicensePlate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPieceNumber(): string
    {
        return $this->PieceNumber;
    }

    /**
     * @param string $PieceNumber
     * @return self
     */
    public function setPieceNumber(string $PieceNumber): self
    {
        $this->PieceNumber = $PieceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualDepth(): string
    {
        return $this->ActualDepth;
    }

    /**
     * @param string $ActualDepth
     * @return self
     */
    public function setActualDepth(string$ActualDepth): self
    {
        $this->ActualDepth = $ActualDepth;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualWidth(): string
    {
        return $this->ActualWidth;
    }

    /**
     * @param string $ActualWidth
     * @return self
     */
    public function setActualWidth(string $ActualWidth): self
    {
        $this->ActualWidth = $ActualWidth;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualHeight(): string
    {
        return $this->ActualHeight;
    }

    /**
     * @param string $ActualHeight
     * @return self
     */
    public function setActualHeight(string $ActualHeight): self
    {
        $this->ActualHeight = $ActualHeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getActualWeight(): string
    {
        return $this->ActualWeight;
    }

    /**
     * @param string $ActualWeight
     * @return self
     */
    public function setActualWeight(string $ActualWeight): self
    {
        $this->ActualWeight = $ActualWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepth(): string
    {
        return $this->Depth;
    }

    /**
     * @param string $Depth
     * @return self
     */
    public function setDepth(string $Depth): self
    {
        $this->Depth = $Depth;
        return $this;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->Width;
    }

    /**
     * @param string $Width
     * @return self
     */
    public function setWidth(string $Width): self
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->Height;
    }

    /**
     * @param string $Height
     * @return self
     */
    public function setHeight(string $Height): self
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return self
     */
    public function setWeight(string $Weight): self
    {
        $this->Weight = $Weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType(): string
    {
        return $this->PackageType;
    }

    /**
     * @param string $PackageType
     * @return self
     */
    public function setPackageType(string $PackageType): self
    {
        $this->PackageType = $PackageType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimWeight(): string
    {
        return $this->DimWeight;
    }

    /**
     * @param string $DimWeight
     * @return self
     */
    public function setDimWeight(string $DimWeight): self
    {
        $this->DimWeight = $DimWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit(): string
    {
        return $this->WeightUnit;
    }

    /**
     * @param string $WeightUnit
     * @return self
     */
    public function setWeightUnit(string $WeightUnit): self
    {
        $this->WeightUnit = $WeightUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getPieceContents(): string
    {
        return $this->PieceContents;
    }

    /**
     * @param string $PieceContents
     * @return self
     */
    public function setPieceContents(string $PieceContents): self
    {
        $this->PieceContents = $PieceContents;
        return $this;
    }
}
