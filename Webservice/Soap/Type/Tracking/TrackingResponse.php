<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class TrackingResponse
{

    /**
     * @var Response $Response
     */
    protected $Response = null;

    /**
     * @var ArrayOfAWBInfo $AWBInfo
     */
    protected $AWBInfo = null;

    /**
     * @var Fault $Fault
     */
    protected $Fault = null;

    /**
     * @param Response $Response
     * @param ArrayOfAWBInfo $AWBInfo
     */
    public function __construct($Response, $AWBInfo)
    {
      $this->Response = $Response;
      $this->AWBInfo = $AWBInfo;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param Response $Response
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingResponse
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
      return $this;
    }

    /**
     * @return ArrayOfAWBInfo
     */
    public function getAWBInfo()
    {
      return $this->AWBInfo;
    }

    /**
     * @param ArrayOfAWBInfo $AWBInfo
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingResponse
     */
    public function setAWBInfo($AWBInfo)
    {
      $this->AWBInfo = $AWBInfo;
      return $this;
    }

    /**
     * @return Fault
     */
    public function getFault()
    {
      return $this->Fault;
    }

    /**
     * @param Fault $Fault
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingResponse
     */
    public function setFault($Fault)
    {
      $this->Fault = $Fault;
      return $this;
    }

}
