<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_ChargeType
{

    /**
     * @var ChargeCode $ChargeCode
     */
    protected $ChargeCode = null;

    /**
     * @var string $ChargeType
     */
    protected $ChargeType = null;

    /**
     * @var string $ChargeAmount
     */
    protected $ChargeAmount = null;

    /**
     * @param string $ChargeType
     * @param string $ChargeAmount
     */
    public function __construct($ChargeType, $ChargeAmount)
    {
      $this->ChargeType = $ChargeType;
      $this->ChargeAmount = $ChargeAmount;
    }

    /**
     * @return ChargeCode
     */
    public function getChargeCode()
    {
      return $this->ChargeCode;
    }

    /**
     * @param ChargeCode $ChargeCode
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargeType
     */
    public function setChargeCode($ChargeCode)
    {
      $this->ChargeCode = $ChargeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeType()
    {
      return $this->ChargeType;
    }

    /**
     * @param string $ChargeType
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargeType
     */
    public function setChargeType($ChargeType)
    {
      $this->ChargeType = $ChargeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeAmount()
    {
      return $this->ChargeAmount;
    }

    /**
     * @param string $ChargeAmount
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargeType
     */
    public function setChargeAmount($ChargeAmount)
    {
      $this->ChargeAmount = $ChargeAmount;
      return $this;
    }

}
