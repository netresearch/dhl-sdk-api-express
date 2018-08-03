<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class PieceDetails
{

    /**
     * @var string $AWBNumber
     */
    protected $AWBNumber = null;

    /**
     * @var TrackingPieceID $LicensePlate
     */
    protected $LicensePlate = null;

    /**
     * @var string $PieceNumber
     */
    protected $PieceNumber = null;

    /**
     * @var string $ActualDepth
     */
    protected $ActualDepth = null;

    /**
     * @var string $ActualWidth
     */
    protected $ActualWidth = null;

    /**
     * @var string $ActualHeight
     */
    protected $ActualHeight = null;

    /**
     * @var string $ActualWeight
     */
    protected $ActualWeight = null;

    /**
     * @var string $Depth
     */
    protected $Depth = null;

    /**
     * @var string $Width
     */
    protected $Width = null;

    /**
     * @var string $Height
     */
    protected $Height = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var PackageType $PackageType
     */
    protected $PackageType = null;

    /**
     * @var string $DimWeight
     */
    protected $DimWeight = null;

    /**
     * @var string $WeightUnit
     */
    protected $WeightUnit = null;

    /**
     * @var string $PieceContents
     */
    protected $PieceContents = null;

    /**
     * @param string $AWBNumber
     * @param TrackingPieceID $LicensePlate
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
     */
    public function setAWBNumber($AWBNumber)
    {
      $this->AWBNumber = $AWBNumber;
      return $this;
    }

    /**
     * @return TrackingPieceID
     */
    public function getLicensePlate()
    {
      return $this->LicensePlate;
    }

    /**
     * @param TrackingPieceID $LicensePlate
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return PackageType
     */
    public function getPackageType()
    {
      return $this->PackageType;
    }

    /**
     * @param PackageType $PackageType
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceDetails
     */
    public function setPieceContents($PieceContents)
    {
      $this->PieceContents = $PieceContents;
      return $this;
    }

}
