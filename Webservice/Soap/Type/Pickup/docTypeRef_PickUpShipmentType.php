<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_PickUpShipmentType
{

    /**
     * @var docTypeRef_ShipmentInfoType $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @var PickupTimestamp $PickupTimestamp
     */
    protected $PickupTimestamp = null;

    /**
     * @var PickupLocationCloseTime $PickupLocationCloseTime
     */
    protected $PickupLocationCloseTime = null;

    /**
     * @var SpecialPickupInstruction $SpecialPickupInstruction
     */
    protected $SpecialPickupInstruction = null;

    /**
     * @var PickupLocation $PickupLocation
     */
    protected $PickupLocation = null;

    /**
     * @var docTypeRef_InternationDetailType $InternationalDetail
     */
    protected $InternationalDetail = null;

    /**
     * @var docTypeRef_ShipType $Ship
     */
    protected $Ship = null;

    /**
     * @var docTypeRef_PackagesType $Packages
     */
    protected $Packages = null;

    /**
     * @param docTypeRef_ShipmentInfoType $ShipmentInfo
     * @param PickupTimestamp $PickupTimestamp
     * @param docTypeRef_InternationDetailType $InternationalDetail
     * @param docTypeRef_ShipType $Ship
     * @param docTypeRef_PackagesType $Packages
     */
    public function __construct($ShipmentInfo, $PickupTimestamp, $InternationalDetail, $Ship, $Packages)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      $this->PickupTimestamp = $PickupTimestamp;
      $this->InternationalDetail = $InternationalDetail;
      $this->Ship = $Ship;
      $this->Packages = $Packages;
    }

    /**
     * @return docTypeRef_ShipmentInfoType
     */
    public function getShipmentInfo()
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param docTypeRef_ShipmentInfoType $ShipmentInfo
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setShipmentInfo($ShipmentInfo)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return PickupTimestamp
     */
    public function getPickupTimestamp()
    {
      return $this->PickupTimestamp;
    }

    /**
     * @param PickupTimestamp $PickupTimestamp
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setPickupTimestamp($PickupTimestamp)
    {
      $this->PickupTimestamp = $PickupTimestamp;
      return $this;
    }

    /**
     * @return PickupLocationCloseTime
     */
    public function getPickupLocationCloseTime()
    {
      return $this->PickupLocationCloseTime;
    }

    /**
     * @param PickupLocationCloseTime $PickupLocationCloseTime
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setPickupLocationCloseTime($PickupLocationCloseTime)
    {
      $this->PickupLocationCloseTime = $PickupLocationCloseTime;
      return $this;
    }

    /**
     * @return SpecialPickupInstruction
     */
    public function getSpecialPickupInstruction()
    {
      return $this->SpecialPickupInstruction;
    }

    /**
     * @param SpecialPickupInstruction $SpecialPickupInstruction
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setSpecialPickupInstruction($SpecialPickupInstruction)
    {
      $this->SpecialPickupInstruction = $SpecialPickupInstruction;
      return $this;
    }

    /**
     * @return PickupLocation
     */
    public function getPickupLocation()
    {
      return $this->PickupLocation;
    }

    /**
     * @param PickupLocation $PickupLocation
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setPickupLocation($PickupLocation)
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return docTypeRef_InternationDetailType
     */
    public function getInternationalDetail()
    {
      return $this->InternationalDetail;
    }

    /**
     * @param docTypeRef_InternationDetailType $InternationalDetail
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setInternationalDetail($InternationalDetail)
    {
      $this->InternationalDetail = $InternationalDetail;
      return $this;
    }

    /**
     * @return docTypeRef_ShipType
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param docTypeRef_ShipType $Ship
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setShip($Ship)
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return docTypeRef_PackagesType
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param docTypeRef_PackagesType $Packages
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PickUpShipmentType
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}
