<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_ChargesType
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var docTypeRef_ChargeType[] $Charge
     */
    protected $Charge = null;

    /**
     * @param string $Currency
     * @param docTypeRef_ChargeType[] $Charge
     */
    public function __construct($Currency, array $Charge)
    {
      $this->Currency = $Currency;
      $this->Charge = $Charge;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargesType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return docTypeRef_ChargeType[]
     */
    public function getCharge()
    {
      return $this->Charge;
    }

    /**
     * @param docTypeRef_ChargeType[] $Charge
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ChargesType
     */
    public function setCharge(array $Charge)
    {
      $this->Charge = $Charge;
      return $this;
    }

}
