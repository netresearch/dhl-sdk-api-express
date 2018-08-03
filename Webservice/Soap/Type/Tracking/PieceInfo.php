<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class PieceInfo
{

    /**
     * @var PieceDetails $PieceDetails
     */
    protected $PieceDetails = null;

    /**
     * @var ArrayOfPieceEvent $PieceEvent
     */
    protected $PieceEvent = null;

    /**
     * @param PieceDetails $PieceDetails
     */
    public function __construct($PieceDetails)
    {
      $this->PieceDetails = $PieceDetails;
    }

    /**
     * @return PieceDetails
     */
    public function getPieceDetails()
    {
      return $this->PieceDetails;
    }

    /**
     * @param PieceDetails $PieceDetails
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceInfo
     */
    public function setPieceDetails($PieceDetails)
    {
      $this->PieceDetails = $PieceDetails;
      return $this;
    }

    /**
     * @return ArrayOfPieceEvent
     */
    public function getPieceEvent()
    {
      return $this->PieceEvent;
    }

    /**
     * @param ArrayOfPieceEvent $PieceEvent
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceInfo
     */
    public function setPieceEvent($PieceEvent)
    {
      $this->PieceEvent = $PieceEvent;
      return $this;
    }

}
