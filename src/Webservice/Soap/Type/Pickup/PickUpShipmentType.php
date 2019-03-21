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
     * @param ShipmentInfoType      $ShipmentInfo
     * @param string                $PickupTimestamp
     * @param InternationDetailType $InternationalDetail
     * @param ShipType              $Ship
     * @param PackagesType          $Packages
     */
    public function __construct(
        ShipmentInfoType $ShipmentInfo,
        $PickupTimestamp,
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
    public function getShipmentInfo()
    {
        return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfoType $ShipmentInfo
     * @return self
     */
    public function setShipmentInfo(ShipmentInfoType $ShipmentInfo)
    {
        $this->ShipmentInfo = $ShipmentInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimestamp()
    {
        return $this->PickupTimestamp;
    }

    /**
     * @param string $PickupTimestamp
     * @return self
     */
    public function setPickupTimestamp($PickupTimestamp)
    {
        $this->PickupTimestamp = $PickupTimestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocationCloseTime()
    {
        return $this->PickupLocationCloseTime;
    }

    /**
     * @param string $PickupLocationCloseTime
     * @return self
     */
    public function setPickupLocationCloseTime($PickupLocationCloseTime)
    {
        $this->PickupLocationCloseTime = $PickupLocationCloseTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialPickupInstruction()
    {
        return $this->SpecialPickupInstruction;
    }

    /**
     * @param string $SpecialPickupInstruction
     * @return self
     */
    public function setSpecialPickupInstruction($SpecialPickupInstruction)
    {
        $this->SpecialPickupInstruction = $SpecialPickupInstruction;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocation()
    {
        return $this->PickupLocation;
    }

    /**
     * @param string $PickupLocation
     * @return self
     */
    public function setPickupLocation($PickupLocation)
    {
        $this->PickupLocation = $PickupLocation;
        return $this;
    }

    /**
     * @return InternationDetailType
     */
    public function getInternationalDetail()
    {
        return $this->InternationalDetail;
    }

    /**
     * @param InternationDetailType $InternationalDetail
     * @return self
     */
    public function setInternationalDetail(InternationDetailType $InternationalDetail)
    {
        $this->InternationalDetail = $InternationalDetail;
        return $this;
    }

    /**
     * @return ShipType
     */
    public function getShip()
    {
        return $this->Ship;
    }

    /**
     * @param ShipType $Ship
     * @return self
     */
    public function setShip(ShipType $Ship)
    {
        $this->Ship = $Ship;
        return $this;
    }

    /**
     * @return PackagesType
     */
    public function getPackages()
    {
        return $this->Packages;
    }

    /**
     * @param PackagesType $Packages
     * @return self
     */
    public function setPackages(PackagesType $Packages)
    {
        $this->Packages = $Packages;
        return $this;
    }
}
