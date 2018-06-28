<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_Content
{

    /**
     * @var ContentID $ContentID
     */
    protected $ContentID = null;

    /**
     * @var DryIceTotalNetWeight $DryIceTotalNetWeight
     */
    protected $DryIceTotalNetWeight = null;

    /**
     * @var UNCode $UNCode
     */
    protected $UNCode = null;

    /**
     * @param ContentID $ContentID
     * @param DryIceTotalNetWeight $DryIceTotalNetWeight
     * @param UNCode $UNCode
     */
    public function __construct($ContentID, $DryIceTotalNetWeight, $UNCode)
    {
      $this->ContentID = $ContentID;
      $this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
      $this->UNCode = $UNCode;
    }

    /**
     * @return ContentID
     */
    public function getContentID()
    {
      return $this->ContentID;
    }

    /**
     * @param ContentID $ContentID
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_Content
     */
    public function setContentID($ContentID)
    {
      $this->ContentID = $ContentID;
      return $this;
    }

    /**
     * @return DryIceTotalNetWeight
     */
    public function getDryIceTotalNetWeight()
    {
      return $this->DryIceTotalNetWeight;
    }

    /**
     * @param DryIceTotalNetWeight $DryIceTotalNetWeight
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_Content
     */
    public function setDryIceTotalNetWeight($DryIceTotalNetWeight)
    {
      $this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
      return $this;
    }

    /**
     * @return UNCode
     */
    public function getUNCode()
    {
      return $this->UNCode;
    }

    /**
     * @param UNCode $UNCode
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_Content
     */
    public function setUNCode($UNCode)
    {
      $this->UNCode = $UNCode;
      return $this;
    }

}
