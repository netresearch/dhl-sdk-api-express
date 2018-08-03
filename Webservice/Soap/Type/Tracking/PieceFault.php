<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class PieceFault
{

    /**
     * @var TrackingPieceID $PieceID
     */
    protected $PieceID = null;

    /**
     * @var string $ConditionCode
     */
    protected $ConditionCode = null;

    /**
     * @var string $ConditionData
     */
    protected $ConditionData = null;

    /**
     * @param TrackingPieceID $PieceID
     * @param string $ConditionCode
     * @param string $ConditionData
     */
    public function __construct($PieceID, $ConditionCode, $ConditionData)
    {
      $this->PieceID = $PieceID;
      $this->ConditionCode = $ConditionCode;
      $this->ConditionData = $ConditionData;
    }

    /**
     * @return TrackingPieceID
     */
    public function getPieceID()
    {
      return $this->PieceID;
    }

    /**
     * @param TrackingPieceID $PieceID
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceFault
     */
    public function setPieceID($PieceID)
    {
      $this->PieceID = $PieceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionCode()
    {
      return $this->ConditionCode;
    }

    /**
     * @param string $ConditionCode
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceFault
     */
    public function setConditionCode($ConditionCode)
    {
      $this->ConditionCode = $ConditionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionData()
    {
      return $this->ConditionData;
    }

    /**
     * @param string $ConditionData
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceFault
     */
    public function setConditionData($ConditionData)
    {
      $this->ConditionData = $ConditionData;
      return $this;
    }

}
