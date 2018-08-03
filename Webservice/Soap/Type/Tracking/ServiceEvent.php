<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ServiceEvent
{

    /**
     * @var EventCode $EventCode
     */
    protected $EventCode = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param EventCode $EventCode
     */
    public function __construct($EventCode)
    {
      $this->EventCode = $EventCode;
    }

    /**
     * @return EventCode
     */
    public function getEventCode()
    {
      return $this->EventCode;
    }

    /**
     * @param EventCode $EventCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ServiceEvent
     */
    public function setEventCode($EventCode)
    {
      $this->EventCode = $EventCode;
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
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ServiceEvent
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
