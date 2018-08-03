<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class Condition
{

    /**
     * @var string $ConditionCode
     */
    protected $ConditionCode = null;

    /**
     * @var string $ConditionData
     */
    protected $ConditionData = null;

    /**
     * @param string $ConditionCode
     */
    public function __construct($ConditionCode)
    {
      $this->ConditionCode = $ConditionCode;
    }

    /**
     * @return string
     */
    public function getConditionCode()
    {
      return $this->ConditionCode;
    }

    /**
     * @param string $ConditionCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\Condition
     */
    public function setConditionCode($ConditionCode)
    {
      $this->ConditionCode = $ConditionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionData()
    {
      return $this->ConditionData;
    }

    /**
     * @param string $ConditionData
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\Condition
     */
    public function setConditionData($ConditionData)
    {
      $this->ConditionData = $ConditionData;
      return $this;
    }

}
