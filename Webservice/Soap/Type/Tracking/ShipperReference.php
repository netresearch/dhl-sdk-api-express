<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ShipperReference
{

    /**
     * @var string $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var string $ReferenceType
     */
    protected $ReferenceType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipperReference
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceType()
    {
      return $this->ReferenceType;
    }

    /**
     * @param string $ReferenceType
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipperReference
     */
    public function setReferenceType($ReferenceType)
    {
      $this->ReferenceType = $ReferenceType;
      return $this;
    }

}
