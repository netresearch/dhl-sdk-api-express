<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class trackShipmentRequest
{

    /**
     * @var pubTrackingRequest $trackingRequest
     */
    protected $trackingRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return pubTrackingRequest
     */
    public function getTrackingRequest()
    {
      return $this->trackingRequest;
    }

    /**
     * @param pubTrackingRequest $trackingRequest
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\trackShipmentRequest
     */
    public function setTrackingRequest($trackingRequest)
    {
      $this->trackingRequest = $trackingRequest;
      return $this;
    }

}
