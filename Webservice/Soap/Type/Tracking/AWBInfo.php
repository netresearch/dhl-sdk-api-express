<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class AWBInfo
{

    /**
     * @var AWBNumber $AWBNumber
     */
    protected $AWBNumber = null;

    /**
     * @var Status $Status
     */
    protected $Status = null;

    /**
     * @var ShipmentInfo $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @var TrackingPieces $Pieces
     */
    protected $Pieces = null;

    /**
     * @param AWBNumber $AWBNumber
     * @param Status $Status
     */
    public function __construct($AWBNumber, $Status)
    {
      $this->AWBNumber = $AWBNumber;
      $this->Status = $Status;
    }

    /**
     * @return AWBNumber
     */
    public function getAWBNumber()
    {
      return $this->AWBNumber;
    }

    /**
     * @param AWBNumber $AWBNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfo
     */
    public function setAWBNumber($AWBNumber)
    {
      $this->AWBNumber = $AWBNumber;
      return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Status $Status
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo()
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo $ShipmentInfo
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfo
     */
    public function setShipmentInfo($ShipmentInfo)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return TrackingPieces
     */
    public function getPieces()
    {
      return $this->Pieces;
    }

    /**
     * @param TrackingPieces $Pieces
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\AWBInfo
     */
    public function setPieces($Pieces)
    {
      $this->Pieces = $Pieces;
      return $this;
    }

}
