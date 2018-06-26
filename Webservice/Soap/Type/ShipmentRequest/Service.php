<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class Service
{

    /**
     * @var ServiceTypeCode $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var Money $ServiceValue
     */
    protected $ServiceValue = null;

    /**
     * @var CurrencyCode $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var PaymentCode $PaymentCode
     */
    protected $PaymentCode = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var TextType $TextInstruction
     */
    protected $TextInstruction = null;

    /**
     * @param ServiceTypeCode $ServiceType
     */
    public function __construct($ServiceType)
    {
      $this->ServiceType = $ServiceType;
    }

    /**
     * @return ServiceTypeCode
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param ServiceTypeCode $ServiceType
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return Money
     */
    public function getServiceValue()
    {
      return $this->ServiceValue;
    }

    /**
     * @param Money $ServiceValue
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setServiceValue($ServiceValue)
    {
      $this->ServiceValue = $ServiceValue;
      return $this;
    }

    /**
     * @return CurrencyCode
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param CurrencyCode $CurrencyCode
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return PaymentCode
     */
    public function getPaymentCode()
    {
      return $this->PaymentCode;
    }

    /**
     * @param PaymentCode $PaymentCode
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setPaymentCode($PaymentCode)
    {
      $this->PaymentCode = $PaymentCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return TextType
     */
    public function getTextInstruction()
    {
      return $this->TextInstruction;
    }

    /**
     * @param TextType $TextInstruction
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Service
     */
    public function setTextInstruction($TextInstruction)
    {
      $this->TextInstruction = $TextInstruction;
      return $this;
    }

}
