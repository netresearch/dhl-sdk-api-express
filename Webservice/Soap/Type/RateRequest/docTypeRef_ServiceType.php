<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_ServiceType
{

    /**
     * @var docTypeRef_TotalNetType $TotalNet
     */
    protected $TotalNet = null;

    /**
     * @var docTypeRef_ChargesType $Charges
     */
    protected $Charges = null;

    /**
     * @var \DateTime $DeliveryTime
     */
    protected $DeliveryTime = null;

    /**
     * @var \DateTime $CutoffTime
     */
    protected $CutoffTime = null;

    /**
     * @var NextBusinessDayInd2 $NextBusinessDayInd
     */
    protected $NextBusinessDayInd = null;

    /**
     * @var _x0040_type $type
     */
    protected $type = null;

    /**
     * @var _x0040_account $account
     */
    protected $account = null;

    /**
     * @param docTypeRef_TotalNetType $TotalNet
     * @param _x0040_type $type
     * @param _x0040_account $account
     */
    public function __construct($TotalNet, $type, $account)
    {
      $this->TotalNet = $TotalNet;
      $this->type = $type;
      $this->account = $account;
    }

    /**
     * @return docTypeRef_TotalNetType
     */
    public function getTotalNet()
    {
      return $this->TotalNet;
    }

    /**
     * @param docTypeRef_TotalNetType $TotalNet
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setTotalNet($TotalNet)
    {
      $this->TotalNet = $TotalNet;
      return $this;
    }

    /**
     * @return docTypeRef_ChargesType
     */
    public function getCharges()
    {
      return $this->Charges;
    }

    /**
     * @param docTypeRef_ChargesType $Charges
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setCharges($Charges)
    {
      $this->Charges = $Charges;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
      if ($this->DeliveryTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryTime
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setDeliveryTime(\DateTime $DeliveryTime = null)
    {
      if ($DeliveryTime == null) {
       $this->DeliveryTime = null;
      } else {
        $this->DeliveryTime = $DeliveryTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCutoffTime()
    {
      if ($this->CutoffTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CutoffTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CutoffTime
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setCutoffTime(\DateTime $CutoffTime = null)
    {
      if ($CutoffTime == null) {
       $this->CutoffTime = null;
      } else {
        $this->CutoffTime = $CutoffTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return NextBusinessDayInd2
     */
    public function getNextBusinessDayInd()
    {
      return $this->NextBusinessDayInd;
    }

    /**
     * @param NextBusinessDayInd2 $NextBusinessDayInd
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setNextBusinessDayInd($NextBusinessDayInd)
    {
      $this->NextBusinessDayInd = $NextBusinessDayInd;
      return $this;
    }

    /**
     * @return _x0040_type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param _x0040_type $type
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return _x0040_account
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param _x0040_account $account
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_ServiceType
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
