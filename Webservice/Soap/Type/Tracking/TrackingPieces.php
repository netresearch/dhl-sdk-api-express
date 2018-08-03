<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class TrackingPieces
{

    /**
     * @var ArrayOfPieceInfo $PieceInfo
     */
    protected $PieceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfPieceInfo
     */
    public function getPieceInfo()
    {
      return $this->PieceInfo;
    }

    /**
     * @param ArrayOfPieceInfo $PieceInfo
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingPieces
     */
    public function setPieceInfo($PieceInfo)
    {
      $this->PieceInfo = $PieceInfo;
      return $this;
    }

}
