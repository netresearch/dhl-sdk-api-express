<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class Service2
{

    /**
     * @var ServiceType2 $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var Money2 $ServiceValue
     */
    protected $ServiceValue = null;

    /**
     * @var CurrencyCode2 $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var PaymentCode2 $PaymentCode
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
     * @var TextType2 $TextInstruction
     */
    protected $TextInstruction = null;

    /**
     * @param ServiceType2 $ServiceType
     */
    public function __construct($ServiceType)
    {
      $this->ServiceType = $ServiceType;
    }

    /**
     * @return ServiceType2
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param ServiceType2 $ServiceType
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return Money2
     */
    public function getServiceValue()
    {
      return $this->ServiceValue;
    }

    /**
     * @param Money2 $ServiceValue
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
     */
    public function setServiceValue($ServiceValue)
    {
      $this->ServiceValue = $ServiceValue;
      return $this;
    }

    /**
     * @return CurrencyCode2
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param CurrencyCode2 $CurrencyCode
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return PaymentCode2
     */
    public function getPaymentCode()
    {
      return $this->PaymentCode;
    }

    /**
     * @param PaymentCode2 $PaymentCode
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
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
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
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
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return TextType2
     */
    public function getTextInstruction()
    {
      return $this->TextInstruction;
    }

    /**
     * @param TextType2 $TextInstruction
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Service2
     */
    public function setTextInstruction($TextInstruction)
    {
      $this->TextInstruction = $TextInstruction;
      return $this;
    }

}
