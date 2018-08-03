<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class Request
{

    /**
     * @var ServiceHeader $ServiceHeader
     */
    protected $ServiceHeader = null;

    /**
     * @param ServiceHeader $ServiceHeader
     */
    public function __construct($ServiceHeader)
    {
      $this->ServiceHeader = $ServiceHeader;
    }

    /**
     * @return ServiceHeader
     */
    public function getServiceHeader()
    {
      return $this->ServiceHeader;
    }

    /**
     * @param ServiceHeader $ServiceHeader
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\Request
     */
    public function setServiceHeader($ServiceHeader)
    {
      $this->ServiceHeader = $ServiceHeader;
      return $this;
    }

}
