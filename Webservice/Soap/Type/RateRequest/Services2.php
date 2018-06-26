<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class Services2
{

    /**
     * @var Service2[] $Service
     */
    protected $Service = null;

    /**
     * @param Service2[] $Service
     */
    public function __construct(array $Service)
    {
      $this->Service = $Service;
    }

    /**
     * @return Service2[]
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param Service2[] $Service
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\Services2
     */
    public function setService(array $Service)
    {
      $this->Service = $Service;
      return $this;
    }

}
