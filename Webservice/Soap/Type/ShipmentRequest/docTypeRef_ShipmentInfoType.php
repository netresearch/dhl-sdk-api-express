<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_ShipmentInfoType
{

    /**
     * @var DropOffType $DropOffType
     */
    protected $DropOffType = null;

    /**
     * @var ServiceType $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var Account $Account
     */
    protected $Account = null;

    /**
     * @var Billing $Billing
     */
    protected $Billing = null;

    /**
     * @var Services $SpecialServices
     */
    protected $SpecialServices = null;

    /**
     * @var Currency $Currency
     */
    protected $Currency = null;

    /**
     * @var UnitOfMeasurement $UnitOfMeasurement
     */
    protected $UnitOfMeasurement = null;

    /**
     * @var ShipmentIdentificationNumber2 $ShipmentIdentificationNumber
     */
    protected $ShipmentIdentificationNumber = null;

    /**
     * @var UseOwnShipmentIdentificationNumber $UseOwnShipmentIdentificationNumber
     */
    protected $UseOwnShipmentIdentificationNumber = null;

    /**
     * @var PackagesCount $PackagesCount
     */
    protected $PackagesCount = null;

    /**
     * @var SendPackage $SendPackage
     */
    protected $SendPackage = null;

    /**
     * @var LabelType $LabelType
     */
    protected $LabelType = null;

    /**
     * @var LabelTemplate $LabelTemplate
     */
    protected $LabelTemplate = null;

    /**
     * @var ArchiveLabelTemplate $ArchiveLabelTemplate
     */
    protected $ArchiveLabelTemplate = null;

    /**
     * @var boolean $PaperlessTradeEnabled
     */
    protected $PaperlessTradeEnabled = null;

    /**
     * @var base64Binary $PaperlessTradeImage
     */
    protected $PaperlessTradeImage = null;

    /**
     * @param DropOffType $DropOffType
     * @param ServiceType $ServiceType
     * @param Currency $Currency
     * @param UnitOfMeasurement $UnitOfMeasurement
     */
    public function __construct($DropOffType, $ServiceType, $Currency, $UnitOfMeasurement)
    {
      $this->DropOffType = $DropOffType;
      $this->ServiceType = $ServiceType;
      $this->Currency = $Currency;
      $this->UnitOfMeasurement = $UnitOfMeasurement;
    }

    /**
     * @return DropOffType
     */
    public function getDropOffType()
    {
      return $this->DropOffType;
    }

    /**
     * @param DropOffType $DropOffType
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setDropOffType($DropOffType)
    {
      $this->DropOffType = $DropOffType;
      return $this;
    }

    /**
     * @return ServiceType
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param ServiceType $ServiceType
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param Account $Account
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling()
    {
      return $this->Billing;
    }

    /**
     * @param Billing $Billing
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setBilling($Billing)
    {
      $this->Billing = $Billing;
      return $this;
    }

    /**
     * @return Services
     */
    public function getSpecialServices()
    {
      return $this->SpecialServices;
    }

    /**
     * @param Services $SpecialServices
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setSpecialServices($SpecialServices)
    {
      $this->SpecialServices = $SpecialServices;
      return $this;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param Currency $Currency
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return UnitOfMeasurement
     */
    public function getUnitOfMeasurement()
    {
      return $this->UnitOfMeasurement;
    }

    /**
     * @param UnitOfMeasurement $UnitOfMeasurement
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setUnitOfMeasurement($UnitOfMeasurement)
    {
      $this->UnitOfMeasurement = $UnitOfMeasurement;
      return $this;
    }

    /**
     * @return ShipmentIdentificationNumber2
     */
    public function getShipmentIdentificationNumber()
    {
      return $this->ShipmentIdentificationNumber;
    }

    /**
     * @param ShipmentIdentificationNumber2 $ShipmentIdentificationNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setShipmentIdentificationNumber($ShipmentIdentificationNumber)
    {
      $this->ShipmentIdentificationNumber = $ShipmentIdentificationNumber;
      return $this;
    }

    /**
     * @return UseOwnShipmentIdentificationNumber
     */
    public function getUseOwnShipmentIdentificationNumber()
    {
      return $this->UseOwnShipmentIdentificationNumber;
    }

    /**
     * @param UseOwnShipmentIdentificationNumber $UseOwnShipmentIdentificationNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setUseOwnShipmentIdentificationNumber($UseOwnShipmentIdentificationNumber)
    {
      $this->UseOwnShipmentIdentificationNumber = $UseOwnShipmentIdentificationNumber;
      return $this;
    }

    /**
     * @return PackagesCount
     */
    public function getPackagesCount()
    {
      return $this->PackagesCount;
    }

    /**
     * @param PackagesCount $PackagesCount
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setPackagesCount($PackagesCount)
    {
      $this->PackagesCount = $PackagesCount;
      return $this;
    }

    /**
     * @return SendPackage
     */
    public function getSendPackage()
    {
      return $this->SendPackage;
    }

    /**
     * @param SendPackage $SendPackage
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setSendPackage($SendPackage)
    {
      $this->SendPackage = $SendPackage;
      return $this;
    }

    /**
     * @return LabelType
     */
    public function getLabelType()
    {
      return $this->LabelType;
    }

    /**
     * @param LabelType $LabelType
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setLabelType($LabelType)
    {
      $this->LabelType = $LabelType;
      return $this;
    }

    /**
     * @return LabelTemplate
     */
    public function getLabelTemplate()
    {
      return $this->LabelTemplate;
    }

    /**
     * @param LabelTemplate $LabelTemplate
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setLabelTemplate($LabelTemplate)
    {
      $this->LabelTemplate = $LabelTemplate;
      return $this;
    }

    /**
     * @return ArchiveLabelTemplate
     */
    public function getArchiveLabelTemplate()
    {
      return $this->ArchiveLabelTemplate;
    }

    /**
     * @param ArchiveLabelTemplate $ArchiveLabelTemplate
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setArchiveLabelTemplate($ArchiveLabelTemplate)
    {
      $this->ArchiveLabelTemplate = $ArchiveLabelTemplate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaperlessTradeEnabled()
    {
      return $this->PaperlessTradeEnabled;
    }

    /**
     * @param boolean $PaperlessTradeEnabled
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setPaperlessTradeEnabled($PaperlessTradeEnabled)
    {
      $this->PaperlessTradeEnabled = $PaperlessTradeEnabled;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPaperlessTradeImage()
    {
      return $this->PaperlessTradeImage;
    }

    /**
     * @param base64Binary $PaperlessTradeImage
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipmentInfoType
     */
    public function setPaperlessTradeImage($PaperlessTradeImage)
    {
      $this->PaperlessTradeImage = $PaperlessTradeImage;
      return $this;
    }

}
