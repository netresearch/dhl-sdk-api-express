<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class Fault
{

    /**
     * @var ArrayOfPieceFault $PieceFault
     */
    protected $PieceFault = null;

    /**
     * @param ArrayOfPieceFault $PieceFault
     */
    public function __construct($PieceFault)
    {
      $this->PieceFault = $PieceFault;
    }

    /**
     * @return ArrayOfPieceFault
     */
    public function getPieceFault()
    {
      return $this->PieceFault;
    }

    /**
     * @param ArrayOfPieceFault $PieceFault
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\Fault
     */
    public function setPieceFault($PieceFault)
    {
      $this->PieceFault = $PieceFault;
      return $this;
    }

}
