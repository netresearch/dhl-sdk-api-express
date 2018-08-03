<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class ShipmentInfo
{

    /**
     * @var OriginServiceArea $OriginServiceArea
     */
    protected $OriginServiceArea = null;

    /**
     * @var DestinationServiceArea $DestinationServiceArea
     */
    protected $DestinationServiceArea = null;

    /**
     * @var PersonName $ShipperName
     */
    protected $ShipperName = null;

    /**
     * @var AccountNumber $ShipperAccountNumber
     */
    protected $ShipperAccountNumber = null;

    /**
     * @var PersonName $ConsigneeName
     */
    protected $ConsigneeName = null;

    /**
     * @var \DateTime $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var string $Pieces
     */
    protected $Pieces = null;

    /**
     * @var string $Weight
     */
    protected $Weight = null;

    /**
     * @var WeightUnit $WeightUnit
     */
    protected $WeightUnit = null;

    /**
     * @var ArrayOfShipmentEvent $ShipmentEvent
     */
    protected $ShipmentEvent = null;

    /**
     * @var Reference $ShipperReference
     */
    protected $ShipperReference = null;

    /**
     * @var \DateTime $EstimatedDeliveryDate
     */
    protected $EstimatedDeliveryDate = null;

    /**
     * @param OriginServiceArea $OriginServiceArea
     * @param DestinationServiceArea $DestinationServiceArea
     * @param PersonName $ShipperName
     * @param PersonName $ConsigneeName
     * @param \DateTime $ShipmentDate
     */
    public function __construct($OriginServiceArea, $DestinationServiceArea, $ShipperName, $ConsigneeName, \DateTime $ShipmentDate)
    {
      $this->OriginServiceArea = $OriginServiceArea;
      $this->DestinationServiceArea = $DestinationServiceArea;
      $this->ShipperName = $ShipperName;
      $this->ConsigneeName = $ConsigneeName;
      $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
    }

    /**
     * @return OriginServiceArea
     */
    public function getOriginServiceArea()
    {
      return $this->OriginServiceArea;
    }

    /**
     * @param OriginServiceArea $OriginServiceArea
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setOriginServiceArea($OriginServiceArea)
    {
      $this->OriginServiceArea = $OriginServiceArea;
      return $this;
    }

    /**
     * @return DestinationServiceArea
     */
    public function getDestinationServiceArea()
    {
      return $this->DestinationServiceArea;
    }

    /**
     * @param DestinationServiceArea $DestinationServiceArea
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setDestinationServiceArea($DestinationServiceArea)
    {
      $this->DestinationServiceArea = $DestinationServiceArea;
      return $this;
    }

    /**
     * @return PersonName
     */
    public function getShipperName()
    {
      return $this->ShipperName;
    }

    /**
     * @param PersonName $ShipperName
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setShipperName($ShipperName)
    {
      $this->ShipperName = $ShipperName;
      return $this;
    }

    /**
     * @return AccountNumber
     */
    public function getShipperAccountNumber()
    {
      return $this->ShipperAccountNumber;
    }

    /**
     * @param AccountNumber $ShipperAccountNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      return $this;
    }

    /**
     * @return PersonName
     */
    public function getConsigneeName()
    {
      return $this->ConsigneeName;
    }

    /**
     * @param PersonName $ConsigneeName
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setConsigneeName($ConsigneeName)
    {
      $this->ConsigneeName = $ConsigneeName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipmentDate()
    {
      if ($this->ShipmentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipmentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipmentDate
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setShipmentDate(\DateTime $ShipmentDate)
    {
      $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPieces()
    {
      return $this->Pieces;
    }

    /**
     * @param string $Pieces
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setPieces($Pieces)
    {
      $this->Pieces = $Pieces;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return WeightUnit
     */
    public function getWeightUnit()
    {
      return $this->WeightUnit;
    }

    /**
     * @param WeightUnit $WeightUnit
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setWeightUnit($WeightUnit)
    {
      $this->WeightUnit = $WeightUnit;
      return $this;
    }

    /**
     * @return ArrayOfShipmentEvent
     */
    public function getShipmentEvent()
    {
      return $this->ShipmentEvent;
    }

    /**
     * @param ArrayOfShipmentEvent $ShipmentEvent
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setShipmentEvent($ShipmentEvent)
    {
      $this->ShipmentEvent = $ShipmentEvent;
      return $this;
    }

    /**
     * @return Reference
     */
    public function getShipperReference()
    {
      return $this->ShipperReference;
    }

    /**
     * @param Reference $ShipperReference
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setShipperReference($ShipperReference)
    {
      $this->ShipperReference = $ShipperReference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
      if ($this->EstimatedDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EstimatedDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EstimatedDeliveryDate
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\ShipmentInfo
     */
    public function setEstimatedDeliveryDate(\DateTime $EstimatedDeliveryDate = null)
    {
      if ($EstimatedDeliveryDate == null) {
       $this->EstimatedDeliveryDate = null;
      } else {
        $this->EstimatedDeliveryDate = $EstimatedDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
