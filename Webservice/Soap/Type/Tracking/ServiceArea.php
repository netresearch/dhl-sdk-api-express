<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ServiceArea
{

    /**
     * @var ServiceAreaCode $ServiceAreaCode
     */
    protected $ServiceAreaCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ServiceArea
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ServiceArea
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
