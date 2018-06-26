<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_CommoditiesType
{

    /**
     * @var NumberOfPieces $NumberOfPieces
     */
    protected $NumberOfPieces = null;

    /**
     * @var Description $Description
     */
    protected $Description = null;

    /**
     * @var CountryOfManufacture $CountryOfManufacture
     */
    protected $CountryOfManufacture = null;

    /**
     * @var Quantity $Quantity
     */
    protected $Quantity = null;

    /**
     * @var UnitPrice $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var CustomsValue $CustomsValue
     */
    protected $CustomsValue = null;

    /**
     * @var USFillingTypeValue $USFillingTypeValue
     */
    protected $USFillingTypeValue = null;

    /**
     * @param Description $Description
     */
    public function __construct($Description)
    {
      $this->Description = $Description;
    }

    /**
     * @return NumberOfPieces
     */
    public function getNumberOfPieces()
    {
      return $this->NumberOfPieces;
    }

    /**
     * @param NumberOfPieces $NumberOfPieces
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setNumberOfPieces($NumberOfPieces)
    {
      $this->NumberOfPieces = $NumberOfPieces;
      return $this;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param Description $Description
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return CountryOfManufacture
     */
    public function getCountryOfManufacture()
    {
      return $this->CountryOfManufacture;
    }

    /**
     * @param CountryOfManufacture $CountryOfManufacture
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setCountryOfManufacture($CountryOfManufacture)
    {
      $this->CountryOfManufacture = $CountryOfManufacture;
      return $this;
    }

    /**
     * @return Quantity
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param Quantity $Quantity
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return UnitPrice
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param UnitPrice $UnitPrice
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

    /**
     * @return CustomsValue
     */
    public function getCustomsValue()
    {
      return $this->CustomsValue;
    }

    /**
     * @param CustomsValue $CustomsValue
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setCustomsValue($CustomsValue)
    {
      $this->CustomsValue = $CustomsValue;
      return $this;
    }

    /**
     * @return USFillingTypeValue
     */
    public function getUSFillingTypeValue()
    {
      return $this->USFillingTypeValue;
    }

    /**
     * @param USFillingTypeValue $USFillingTypeValue
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_CommoditiesType
     */
    public function setUSFillingTypeValue($USFillingTypeValue)
    {
      $this->USFillingTypeValue = $USFillingTypeValue;
      return $this;
    }

}
