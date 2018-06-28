<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_RequestedPackagesType
{

    /**
     * @var InsuredValue $InsuredValue
     */
    protected $InsuredValue = null;

    /**
     * @var Weight $Weight
     */
    protected $Weight = null;

    /**
     * @var PieceIdentificationNumber $PieceIdentificationNumber
     */
    protected $PieceIdentificationNumber = null;

    /**
     * @var UseOwnPieceIdentificationNumber $UseOwnPieceIdentificationNumber
     */
    protected $UseOwnPieceIdentificationNumber = null;

    /**
     * @var PackageContentDescription $PackageContentDescription
     */
    protected $PackageContentDescription = null;

    /**
     * @var docTypeRef_DimensionsType $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var CustomerReferences $CustomerReferences
     */
    protected $CustomerReferences = null;

    /**
     * @var _x0040_number $number
     */
    protected $number = null;

    /**
     * @param Weight $Weight
     * @param docTypeRef_DimensionsType $Dimensions
     * @param CustomerReferences $CustomerReferences
     * @param _x0040_number $number
     */
    public function __construct($Weight, $Dimensions, $CustomerReferences, $number)
    {
      $this->Weight = $Weight;
      $this->Dimensions = $Dimensions;
      $this->CustomerReferences = $CustomerReferences;
      $this->number = $number;
    }

    /**
     * @return InsuredValue
     */
    public function getInsuredValue()
    {
      return $this->InsuredValue;
    }

    /**
     * @param InsuredValue $InsuredValue
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setInsuredValue($InsuredValue)
    {
      $this->InsuredValue = $InsuredValue;
      return $this;
    }

    /**
     * @return Weight
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param Weight $Weight
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return PieceIdentificationNumber
     */
    public function getPieceIdentificationNumber()
    {
      return $this->PieceIdentificationNumber;
    }

    /**
     * @param PieceIdentificationNumber $PieceIdentificationNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setPieceIdentificationNumber($PieceIdentificationNumber)
    {
      $this->PieceIdentificationNumber = $PieceIdentificationNumber;
      return $this;
    }

    /**
     * @return UseOwnPieceIdentificationNumber
     */
    public function getUseOwnPieceIdentificationNumber()
    {
      return $this->UseOwnPieceIdentificationNumber;
    }

    /**
     * @param UseOwnPieceIdentificationNumber $UseOwnPieceIdentificationNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setUseOwnPieceIdentificationNumber($UseOwnPieceIdentificationNumber)
    {
      $this->UseOwnPieceIdentificationNumber = $UseOwnPieceIdentificationNumber;
      return $this;
    }

    /**
     * @return PackageContentDescription
     */
    public function getPackageContentDescription()
    {
      return $this->PackageContentDescription;
    }

    /**
     * @param PackageContentDescription $PackageContentDescription
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setPackageContentDescription($PackageContentDescription)
    {
      $this->PackageContentDescription = $PackageContentDescription;
      return $this;
    }

    /**
     * @return docTypeRef_DimensionsType
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param docTypeRef_DimensionsType $Dimensions
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return CustomerReferences
     */
    public function getCustomerReferences()
    {
      return $this->CustomerReferences;
    }

    /**
     * @param CustomerReferences $CustomerReferences
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setCustomerReferences($CustomerReferences)
    {
      $this->CustomerReferences = $CustomerReferences;
      return $this;
    }

    /**
     * @return _x0040_number
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param _x0040_number $number
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedPackagesType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
