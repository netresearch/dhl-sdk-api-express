<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class pubTrackingRequest
{

    /**
     * @var TrackingRequest $TrackingRequest
     */
    protected $TrackingRequest = null;

    /**
     * @param TrackingRequest $TrackingRequest
     */
    public function __construct($TrackingRequest)
    {
      $this->TrackingRequest = $TrackingRequest;
    }

    /**
     * @return TrackingRequest
     */
    public function getTrackingRequest()
    {
      return $this->TrackingRequest;
    }

    /**
     * @param TrackingRequest $TrackingRequest
     * @return pubTrackingRequest
     */
    public function setTrackingRequest($TrackingRequest)
    {
      $this->TrackingRequest = $TrackingRequest;
      return $this;
    }

}
