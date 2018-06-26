<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_RequestedShipmentType2
{

    /**
     * @var DropOffType2 $DropOffType
     */
    protected $DropOffType = null;

    /**
     * @var NextBusinessDay2 $NextBusinessDay
     */
    protected $NextBusinessDay = null;

    /**
     * @var docTypeRef_ShipType2 $Ship
     */
    protected $Ship = null;

    /**
     * @var docTypeRef_PackagesType2 $Packages
     */
    protected $Packages = null;

    /**
     * @var ShipTimestamp2 $ShipTimestamp
     */
    protected $ShipTimestamp = null;

    /**
     * @var UnitOfMeasurement2 $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var Content2 $Content
     */
    protected $Content = null;

    /**
     * @var DeclaredValue $DeclaredValue
     */
    protected $DeclaredValue = null;

    /**
     * @var DeclaredValueCurrencyCode $DeclaredValueCurrencyCode
     */
    protected $DeclaredValueCurrencyCode = null;

    /**
     * @var PaymentInfo2 $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var Account2 $Account
     */
    protected $Account = null;

    /**
     * @var Billing2 $Billing
     */
    protected $Billing = null;

    /**
     * @var Services2 $SpecialServices
     */
    protected $SpecialServices = null;

    /**
     * @var RequestValueAddedServices $RequestValueAddedServices
     */
    protected $RequestValueAddedServices = null;

    /**
     * @param DropOffType2 $DropOffType
     * @param docTypeRef_ShipType2 $Ship
     * @param docTypeRef_PackagesType2 $Packages
     * @param ShipTimestamp2 $ShipTimestamp
     * @param UnitOfMeasurement2 $UnitOfMeasurement
     */
    public function __construct($DropOffType, $Ship, $Packages, $ShipTimestamp, $UnitOfMeasurement)
    {
      $this->DropOffType = $DropOffType;
      $this->Ship = $Ship;
      $this->Packages = $Packages;
      $this->ShipTimestamp = $ShipTimestamp;
      $this->UnitOfMeasurement = $UnitOfMeasurement;
    }

    /**
     * @return DropOffType2
     */
    public function getDropOffType()
    {
      return $this->DropOffType;
    }

    /**
     * @param DropOffType2 $DropOffType
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setDropOffType($DropOffType)
    {
      $this->DropOffType = $DropOffType;
      return $this;
    }

    /**
     * @return NextBusinessDay2
     */
    public function getNextBusinessDay()
    {
      return $this->NextBusinessDay;
    }

    /**
     * @param NextBusinessDay2 $NextBusinessDay
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setNextBusinessDay($NextBusinessDay)
    {
      $this->NextBusinessDay = $NextBusinessDay;
      return $this;
    }

    /**
     * @return docTypeRef_ShipType2
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param docTypeRef_ShipType2 $Ship
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setShip($Ship)
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return docTypeRef_PackagesType2
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param docTypeRef_PackagesType2 $Packages
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return ShipTimestamp2
     */
    public function getShipTimestamp()
    {
      return $this->ShipTimestamp;
    }

    /**
     * @param ShipTimestamp2 $ShipTimestamp
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setShipTimestamp($ShipTimestamp)
    {
      $this->ShipTimestamp = $ShipTimestamp;
      return $this;
    }

    /**
     * @return UnitOfMeasurement2
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param UnitOfMeasurement2 $UnitOfMeasurement
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return Content2
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param Content2 $Content
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return DeclaredValue
     */
    public function getDeclaredValue()
    {
      return $this->DeclaredValue;
    }

    /**
     * @param DeclaredValue $DeclaredValue
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setDeclaredValue($DeclaredValue)
    {
      $this->DeclaredValue = $DeclaredValue;
      return $this;
    }

    /**
     * @return DeclaredValueCurrencyCode
     */
    public function getDeclaredValueCurrencyCode()
    {
      return $this->DeclaredValueCurrencyCode;
    }

    /**
     * @param DeclaredValueCurrencyCode $DeclaredValueCurrencyCode
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setDeclaredValueCurrencyCode($DeclaredValueCurrencyCode)
    {
      $this->DeclaredValueCurrencyCode = $DeclaredValueCurrencyCode;
      return $this;
    }

    /**
     * @return PaymentInfo2
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo2 $PaymentInfo
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return Account2
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param Account2 $Account
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return Billing2
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param Billing2 $Billing
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return Services2
     */
    public function getSpecialServices()
    {
      return $this->SpecialServices;
    }

    /**
     * @param Services2 $SpecialServices
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setSpecialServices($SpecialServices)
    {
      $this->SpecialServices = $SpecialServices;
      return $this;
    }

    /**
     * @return RequestValueAddedServices
     */
    public function getRequestValueAddedServices()
    {
      return $this->RequestValueAddedServices;
    }

    /**
     * @param RequestValueAddedServices $RequestValueAddedServices
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RequestedShipmentType2
     */
    public function setRequestValueAddedServices($RequestValueAddedServices)
    {
      $this->RequestValueAddedServices = $RequestValueAddedServices;
      return $this;
    }

}
