<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_RequestedShipmentType
{

    /**
     * @var docTypeRef_ShipmentInfoType $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @var ShipTimestamp $ShipTimestamp
     */
    protected $ShipTimestamp = null;

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
     * @var PaymentInfo $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var docTypeRef_InternationDetailType $InternationalDetail
     */
    protected $InternationalDetail = null;

    /**
     * @var docTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions
     */
    protected $OnDemandDeliveryOptions = null;

    /**
     * @var docTypeRef_ShipType $Ship
     */
    protected $Ship = null;

    /**
     * @var docTypeRef_PackagesType $Packages
     */
    protected $Packages = null;

    /**
     * @var docTypeRef_DangerousGoods $DangerousGoods
     */
    protected $DangerousGoods = null;

    /**
     * @param docTypeRef_ShipmentInfoType $ShipmentInfo
     * @param ShipTimestamp $ShipTimestamp
     * @param PaymentInfo $PaymentInfo
     * @param docTypeRef_InternationDetailType $InternationalDetail
     * @param docTypeRef_ShipType $Ship
     * @param docTypeRef_PackagesType $Packages
     */
    public function __construct($ShipmentInfo, $ShipTimestamp, $PaymentInfo, $InternationalDetail, $Ship, $Packages)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      $this->ShipTimestamp = $ShipTimestamp;
      $this->PaymentInfo = $PaymentInfo;
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setShipmentInfo($ShipmentInfo)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return ShipTimestamp
     */
    public function getShipTimestamp()
    {
      return $this->ShipTimestamp;
    }

    /**
     * @param ShipTimestamp $ShipTimestamp
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setShipTimestamp($ShipTimestamp)
    {
      $this->ShipTimestamp = $ShipTimestamp;
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setPickupLocation($PickupLocation)
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setInternationalDetail($InternationalDetail)
    {
      $this->InternationalDetail = $InternationalDetail;
      return $this;
    }

    /**
     * @return docTypeRef_OnDemandDeliveryOptions
     */
    public function getOnDemandDeliveryOptions()
    {
      return $this->OnDemandDeliveryOptions;
    }

    /**
     * @param docTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setOnDemandDeliveryOptions($OnDemandDeliveryOptions)
    {
      $this->OnDemandDeliveryOptions = $OnDemandDeliveryOptions;
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return docTypeRef_DangerousGoods
     */
    public function getDangerousGoods()
    {
      return $this->DangerousGoods;
    }

    /**
     * @param docTypeRef_DangerousGoods $DangerousGoods
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_RequestedShipmentType
     */
    public function setDangerousGoods($DangerousGoods)
    {
      $this->DangerousGoods = $DangerousGoods;
      return $this;
    }

}
