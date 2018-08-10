<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * PickUpShipmentType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PickUpShipmentType
{
    /**
     * @var ShipmentInfoType
     */
    protected $ShipmentInfo;

    /**
     * @var string
     */
    protected $PickupTimestamp;

    /**
     * @var string
     */
    protected $PickupLocationCloseTime;

    /**
     * @var string
     */
    protected $SpecialPickupInstruction;

    /**
     * @var string
     */
    protected $PickupLocation;

    /**
     * @var InternationDetailType
     */
    protected $InternationalDetail;

    /**
     * @var ShipType
     */
    protected $Ship;

    /**
     * @var PackagesType
     */
    protected $Packages;

    /**
     * @param ShipmentInfoType $ShipmentInfo
     * @param string $PickupTimestamp
     * @param InternationDetailType $InternationalDetail
     * @param ShipType $Ship
     * @param PackagesType $Packages
     */
    public function __construct(
        ShipmentInfoType $ShipmentInfo,
        string $PickupTimestamp,
        InternationDetailType $InternationalDetail,
        ShipType $Ship,
        PackagesType $Packages
    ) {
      $this->ShipmentInfo = $ShipmentInfo;
      $this->PickupTimestamp = $PickupTimestamp;
      $this->InternationalDetail = $InternationalDetail;
      $this->Ship = $Ship;
      $this->Packages = $Packages;
    }

    /**
     * @return ShipmentInfoType
     */
    public function getShipmentInfo(): ShipmentInfoType
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfoType $ShipmentInfo
     * @return self
     */
    public function setShipmentInfo(ShipmentInfoType $ShipmentInfo): self
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimestamp(): string
    {
      return $this->PickupTimestamp;
    }

    /**
     * @param string $PickupTimestamp
     * @return self
     */
    public function setPickupTimestamp(string $PickupTimestamp): self
    {
      $this->PickupTimestamp = $PickupTimestamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocationCloseTime(): string
    {
      return $this->PickupLocationCloseTime;
    }

    /**
     * @param string $PickupLocationCloseTime
     * @return self
     */
    public function setPickupLocationCloseTime(string $PickupLocationCloseTime): self
    {
      $this->PickupLocationCloseTime = $PickupLocationCloseTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialPickupInstruction(): string
    {
      return $this->SpecialPickupInstruction;
    }

    /**
     * @param string $SpecialPickupInstruction
     * @return self
     */
    public function setSpecialPickupInstruction(string $SpecialPickupInstruction): self
    {
      $this->SpecialPickupInstruction = $SpecialPickupInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocation(): string
    {
      return $this->PickupLocation;
    }

    /**
     * @param string $PickupLocation
     * @return self
     */
    public function setPickupLocation(string $PickupLocation): self
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return InternationDetailType
     */
    public function getInternationalDetail(): InternationDetailType
    {
      return $this->InternationalDetail;
    }

    /**
     * @param InternationDetailType $InternationalDetail
     * @return self
     */
    public function setInternationalDetail(InternationDetailType $InternationalDetail): self
    {
      $this->InternationalDetail = $InternationalDetail;
      return $this;
    }

    /**
     * @return ShipType
     */
    public function getShip(): ShipType
    {
      return $this->Ship;
    }

    /**
     * @param ShipType $Ship
     * @return self
     */
    public function setShip(ShipType $Ship): self
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return PackagesType
     */
    public function getPackages(): PackagesType
    {
      return $this->Packages;
    }

    /**
     * @param PackagesType $Packages
     * @return self
     */
    public function setPackages(PackagesType $Packages): self
    {
      $this->Packages = $Packages;
      return $this;
    }
}
