<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class OriginServiceArea
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
     * @var OutboundSortCode $OutboundSortCode
     */
    protected $OutboundSortCode = null;

    
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\OriginServiceArea
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\OriginServiceArea
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return OutboundSortCode
     */
    public function getOutboundSortCode()
    {
      return $this->OutboundSortCode;
    }

    /**
     * @param OutboundSortCode $OutboundSortCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\OriginServiceArea
     */
    public function setOutboundSortCode($OutboundSortCode)
    {
      $this->OutboundSortCode = $OutboundSortCode;
      return $this;
    }

}
