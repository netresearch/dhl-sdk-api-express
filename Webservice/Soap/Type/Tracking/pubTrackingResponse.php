<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class pubTrackingResponse
{

    /**
     * @var TrackingResponse $TrackingResponse
     */
    protected $TrackingResponse = null;

    /**
     * @param TrackingResponse $TrackingResponse
     */
    public function __construct($TrackingResponse)
    {
      $this->TrackingResponse = $TrackingResponse;
    }

    /**
     * @return TrackingResponse
     */
    public function getTrackingResponse()
    {
      return $this->TrackingResponse;
    }

    /**
     * @param TrackingResponse $TrackingResponse
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\pubTrackingResponse
     */
    public function setTrackingResponse($TrackingResponse)
    {
      $this->TrackingResponse = $TrackingResponse;
      return $this;
    }

}
