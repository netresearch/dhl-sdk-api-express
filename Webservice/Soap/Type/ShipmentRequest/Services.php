<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class Services
{

    /**
     * @var Service[] $Service
     */
    protected $Service = null;

    /**
     * @param Service[] $Service
     */
    public function __construct(array $Service)
    {
      $this->Service = $Service;
    }

    /**
     * @return Service[]
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service[] $Service
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Services
     */
    public function setService(array $Service)
    {
      $this->Service = $Service;
      return $this;
    }

}
