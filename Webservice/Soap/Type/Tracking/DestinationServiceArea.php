<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class DestinationServiceArea
{

    /**
     * @var ServiceAreaCode $ServiceAreaCode
     */
    protected $ServiceAreaCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var FacilityCode $FacilityCode
     */
    protected $FacilityCode = null;

    /**
     * @var InboundSortCode $InboundSortCode
     */
    protected $InboundSortCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceAreaCode
     */
    public function getServiceAreaCode()
    {
      return $this->ServiceAreaCode;
    }

    /**
     * @param ServiceAreaCode $ServiceAreaCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\DestinationServiceArea
     */
    public function setServiceAreaCode($ServiceAreaCode)
    {
      $this->ServiceAreaCode = $ServiceAreaCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\DestinationServiceArea
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return FacilityCode
     */
    public function getFacilityCode()
    {
      return $this->FacilityCode;
    }

    /**
     * @param FacilityCode $FacilityCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\DestinationServiceArea
     */
    public function setFacilityCode($FacilityCode)
    {
      $this->FacilityCode = $FacilityCode;
      return $this;
    }

    /**
     * @return InboundSortCode
     */
    public function getInboundSortCode()
    {
      return $this->InboundSortCode;
    }

    /**
     * @param InboundSortCode $InboundSortCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\DestinationServiceArea
     */
    public function setInboundSortCode($InboundSortCode)
    {
      $this->InboundSortCode = $InboundSortCode;
      return $this;
    }

}
