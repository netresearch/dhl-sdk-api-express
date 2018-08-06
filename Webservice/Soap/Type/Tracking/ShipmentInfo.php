<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ShipmentInfo class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentInfo
{
    /**
     * @var OriginServiceArea
     */
    protected $OriginServiceArea;

    /**
     * @var DestinationServiceArea
     */
    protected $DestinationServiceArea;

    /**
     * @var string
     */
    protected $ShipperName;

    /**
     * @var int
     */
    protected $ShipperAccountNumber;

    /**
     * @var string
     */
    protected $ConsigneeName;

    /**
     * @var \DateTime
     */
    protected $ShipmentDate;

    /**
     * @var string
     */
    protected $Pieces;

    /**
     * @var string
     */
    protected $Weight;

    /**
     * @var WeightUnit
     */
    protected $WeightUnit;

    /**
     * @var ShipmentEventCollection
     */
    protected $ShipmentEvent;

    /**
     * @var Reference
     */
    protected $ShipperReference;

    /**
     * @var \DateTime
     */
    protected $EstimatedDeliveryDate;

    /**
     * @param OriginServiceArea $OriginServiceArea
     * @param DestinationServiceArea $DestinationServiceArea
     * @param string $ShipperName
     * @param string $ConsigneeName
     * @param \DateTime $ShipmentDate
     */
    public function __construct(
        OriginServiceArea $OriginServiceArea,
        DestinationServiceArea $DestinationServiceArea, 
        string $ShipperName, 
        string $ConsigneeName,
        \DateTime $ShipmentDate
    ) {
      $this->OriginServiceArea = $OriginServiceArea;
      $this->DestinationServiceArea = $DestinationServiceArea;
      $this->ShipperName = $ShipperName;
      $this->ConsigneeName = $ConsigneeName;
      $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
    }

    /**
     * @return OriginServiceArea
     */
    public function getOriginServiceArea(): OriginServiceArea
    {
      return $this->OriginServiceArea;
    }

    /**
     * @param OriginServiceArea $OriginServiceArea
     * @return self
     */
    public function setOriginServiceArea(OriginServiceArea $OriginServiceArea): self
    {
      $this->OriginServiceArea = $OriginServiceArea;
      return $this;
    }

    /**
     * @return DestinationServiceArea
     */
    public function getDestinationServiceArea(): DestinationServiceArea
    {
      return $this->DestinationServiceArea;
    }

    /**
     * @param DestinationServiceArea $DestinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(DestinationServiceArea $DestinationServiceArea): self
    {
      $this->DestinationServiceArea = $DestinationServiceArea;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperName(): string
    {
      return $this->ShipperName;
    }

    /**
     * @param string $ShipperName
     * @return self
     */
    public function setShipperName(string $ShipperName): self
    {
      $this->ShipperName = $ShipperName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipperAccountNumber(): string
    {
      return $this->ShipperAccountNumber;
    }

    /**
     * @param string $ShipperAccountNumber
     * @return self
     */
    public function setShipperAccountNumber($ShipperAccountNumber): self
    {
      $this->ShipperAccountNumber = $ShipperAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeName(): string
    {
      return $this->ConsigneeName;
    }

    /**
     * @param string $ConsigneeName
     * @return self
     */
    public function setConsigneeName($ConsigneeName): string
    {
      $this->ConsigneeName = $ConsigneeName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipmentDate(): \DateTime
    {
      if ($this->ShipmentDate === null) {
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
     * @return self
     */
    public function setShipmentDate(\DateTime $ShipmentDate): self
    {
      $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPieces(): string
    {
      return $this->Pieces;
    }

    /**
     * @param string $Pieces
     * @return self
     */
    public function setPieces(string $Pieces): self
    {
      $this->Pieces = $Pieces;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
      return $this->Weight;
    }

    /**
     * @param string $Weight
     * @return self
     */
    public function setWeight(string $Weight): self
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return WeightUnit
     */
    public function getWeightUnit(): WeightUnit
    {
      return $this->WeightUnit;
    }

    /**
     * @param WeightUnit $WeightUnit
     * @return self
     */
    public function setWeightUnit(WeightUnit $WeightUnit): self
    {
      $this->WeightUnit = $WeightUnit;
      return $this;
    }

    /**
     * @return ShipmentEventCollection
     */
    public function getShipmentEvent(): ShipmentEventCollection
    {
      return $this->ShipmentEvent;
    }

    /**
     * @param ShipmentEventCollection $ShipmentEvent
     * @return self
     */
    public function setShipmentEvent(ShipmentEventCollection $ShipmentEvent): self
    {
      $this->ShipmentEvent = $ShipmentEvent;
      return $this;
    }

    /**
     * @return Reference
     */
    public function getShipperReference(): Reference
    {
      return $this->ShipperReference;
    }

    /**
     * @param Reference $ShipperReference
     * @return self
     */
    public function setShipperReference(Reference $ShipperReference): self
    {
      $this->ShipperReference = $ShipperReference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate(): \DateTime
    {
      if ($this->EstimatedDeliveryDate === null) {
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
     * @return self
     */
    public function setEstimatedDeliveryDate(\DateTime $EstimatedDeliveryDate = null): self
    {
      if ($EstimatedDeliveryDate === null) {
       $this->EstimatedDeliveryDate = null;
      } else {
        $this->EstimatedDeliveryDate = $EstimatedDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }
}
