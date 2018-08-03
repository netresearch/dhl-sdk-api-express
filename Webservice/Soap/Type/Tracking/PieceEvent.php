<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class PieceEvent
{

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @var time $Time
     */
    protected $Time = null;

    /**
     * @var ServiceEvent $ServiceEvent
     */
    protected $ServiceEvent = null;

    /**
     * @var Signatory2 $Signatory
     */
    protected $Signatory = null;

    /**
     * @var ServiceArea $ServiceArea
     */
    protected $ServiceArea = null;

    /**
     * @var ShipperReference $ShipperReference
     */
    protected $ShipperReference = null;

    /**
     * @param date $Date
     * @param time $Time
     * @param ServiceEvent $ServiceEvent
     * @param ServiceArea $ServiceArea
     */
    public function __construct($Date, $Time, $ServiceEvent, $ServiceArea)
    {
      $this->Date = $Date;
      $this->Time = $Time;
      $this->ServiceEvent = $ServiceEvent;
      $this->ServiceArea = $ServiceArea;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return time
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param time $Time
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return ServiceEvent
     */
    public function getServiceEvent()
    {
      return $this->ServiceEvent;
    }

    /**
     * @param ServiceEvent $ServiceEvent
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent
     */
    public function setServiceEvent($ServiceEvent)
    {
      $this->ServiceEvent = $ServiceEvent;
      return $this;
    }

    /**
     * @return Signatory2
     */
    public function getSignatory()
    {
      return $this->Signatory;
    }

    /**
     * @param Signatory2 $Signatory
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent
     */
    public function setSignatory($Signatory)
    {
      $this->Signatory = $Signatory;
      return $this;
    }

    /**
     * @return ServiceArea
     */
    public function getServiceArea()
    {
      return $this->ServiceArea;
    }

    /**
     * @param ServiceArea $ServiceArea
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent
     */
    public function setServiceArea($ServiceArea)
    {
      $this->ServiceArea = $ServiceArea;
      return $this;
    }

    /**
     * @return ShipperReference
     */
    public function getShipperReference()
    {
      return $this->ShipperReference;
    }

    /**
     * @param ShipperReference $ShipperReference
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\PieceEvent
     */
    public function setShipperReference($ShipperReference)
    {
      $this->ShipperReference = $ShipperReference;
      return $this;
    }

}
