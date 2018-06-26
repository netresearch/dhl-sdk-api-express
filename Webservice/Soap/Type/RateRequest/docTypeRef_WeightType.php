<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_WeightType
{

    /**
     * @var Value $Value
     */
    protected $Value = null;

    /**
     * @param Value $Value
     */
    public function __construct($Value)
    {
      $this->Value = $Value;
    }

    /**
     * @return Value
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param Value $Value
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_WeightType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
