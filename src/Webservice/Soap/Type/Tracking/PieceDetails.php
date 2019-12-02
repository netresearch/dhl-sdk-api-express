<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * PieceDetails class.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
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
    public function __construct($AWBNumber, $LicensePlate)
    {
        $this->AWBNumber = $AWBNumber;
        $this->LicensePlate = $LicensePlate;
    }

    /**
     * @return string
     */
    public function getAWBNumber()
    {
        return $this->AWBNumber;
    }

    /**
     * @param string $AWBNumber
     *
     * @return self
     */
    public function setAWBNumber($AWBNumber)
    {
        $this->AWBNumber = $AWBNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->LicensePlate;
    }

    /**
     * @param string $LicensePlate
     * @return self
     */
    public function setLicensePlate($LicensePlate)
    {
        $this->LicensePlate = $LicensePlate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPieceNumber()
    {
        return $this->PieceNumber;
    }

    /**
     * @param string $PieceNumber
     * @return self
     */
    public function setPieceNumber($PieceNumber)
    {
        $this->PieceNumber = $PieceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getActualDepth()
    {
        return $this->ActualDepth;
    }

    /**
     * @param string $ActualDepth
     * @return self
     */
    public function setActualDepth($ActualDepth)
    {
        $this->ActualDepth = $ActualDepth;

        return $this;
    }

    /**
     * @return string
     */
    public function getActualWidth()
    {
        return $this->ActualWidth;
    }

    /**
     * @param string $ActualWidth
     * @return self
     */
    public function setActualWidth($ActualWidth)
    {
        $this->ActualWidth = $ActualWidth;

        return $this;
    }

    /**
     * @return string
     */
    public function getActualHeight()
    {
        return $this->ActualHeight;
    }

    /**
     * @param string $ActualHeight
     * @return self
     */
    public function setActualHeight($ActualHeight)
    {
        $this->ActualHeight = $ActualHeight;

        return $this;
    }

    /**
     * @return string
     */
    public function getActualWeight()
    {
        return $this->ActualWeight;
    }

    /**
     * @param string $ActualWeight
     * @return self
     */
    public function setActualWeight($ActualWeight)
    {
        $this->ActualWeight = $ActualWeight;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepth()
    {
        return $this->Depth;
    }

    /**
     * @param string $Depth
     * @return self
     */
    public function setDepth($Depth)
    {
        $this->Depth = $Depth;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param string $Width
     * @return self
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param string $Height
     * @return self
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return self
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->PackageType;
    }

    /**
     * @param string $PackageType
     * @return self
     */
    public function setPackageType($PackageType)
    {
        $this->PackageType = $PackageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDimWeight()
    {
        return $this->DimWeight;
    }

    /**
     * @param string $DimWeight
     * @return self
     */
    public function setDimWeight($DimWeight)
    {
        $this->DimWeight = $DimWeight;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->WeightUnit;
    }

    /**
     * @param string $WeightUnit
     * @return self
     */
    public function setWeightUnit($WeightUnit)
    {
        $this->WeightUnit = $WeightUnit;

        return $this;
    }

    /**
     * @return string
     */
    public function getPieceContents()
    {
        return $this->PieceContents;
    }

    /**
     * @param string $PieceContents
     * @return self
     */
    public function setPieceContents($PieceContents)
    {
        $this->PieceContents = $PieceContents;

        return $this;
    }
}
