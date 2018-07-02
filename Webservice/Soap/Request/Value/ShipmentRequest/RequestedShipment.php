<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Request\Value\PaymentInfo;
use Dhl\Express\Webservice\Soap\Request\Value\PickupLocation;
use Dhl\Express\Webservice\Soap\Request\Value\PickupLocationCloseTime;
use Dhl\Express\Webservice\Soap\Request\Value\ShipTimestamp;
use Dhl\Express\Webservice\Soap\Request\Value\SpecialPickupInstruction;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_DangerousGoods;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_InternationDetailType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_OnDemandDeliveryOptions;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_PackagesType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ShipType;

/**
 * The requested shipment.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RequestedShipment
{
    /**
     * The shipment info section.
     *
     * @var ShipmentInfo
     */
    private $ShipmentInfo;

    /**
     * The ship timestamp.
     *
     * @var ShipTimestamp
     */
    private $ShipTimestamp;

    /**
     * The pickup location close time.
     *
     * @var null|PickupLocationCloseTime
     */
    private $PickupLocationCloseTime;

    /**
     * The special pickup instruction.
     *
     * @var null|SpecialPickupInstruction
     */
    private $SpecialPickupInstruction;

    /**
     * The pickup location.
     *
     * @var null|PickupLocation
     */
    private $PickupLocation;

    /**
     * The payment info.
     *
     * @var PaymentInfo
     */
    private $PaymentInfo;

    /**
     * @var docTypeRef_InternationDetailType
     */
    private $InternationalDetail;

    /**
     * @var null|docTypeRef_OnDemandDeliveryOptions
     */
    private $OnDemandDeliveryOptions;

    /**
     * @var docTypeRef_ShipType
     */
    private $Ship;

    /**
     * @var docTypeRef_PackagesType
     */
    private $Packages;

    /**
     * @var null|docTypeRef_DangerousGoods
     */
    private $DangerousGoods;

    /**
     * Constructor.
     *
     * @param ShipmentInfo $shipmentInfo
     * @param string       $shipTimestamp
     * @param PaymentInfo $paymentInfo
     * @param docTypeRef_InternationDetailType $internationalDetail
     * @param docTypeRef_ShipType $ship
     * @param docTypeRef_PackagesType $packages
     */
    public function __construct(
        ShipmentInfo $shipmentInfo,
        string $shipTimestamp,
        $paymentInfo,
        $internationalDetail,
        $ship,
        $packages
    ) {
        $this->setShipmentInfo($shipmentInfo)
            ->setShipTimestamp($shipTimestamp)
            ->setPaymentInfo($paymentInfo)
            ->setInternationalDetail($internationalDetail)
            ->setShip($ship)
            ->setPackages($packages);
    }

    /**
     * Returns the shipment info.
     *
     * @return ShipmentInfo
     */
    public function getShipmentInfo(): ShipmentInfo
    {
        return $this->ShipmentInfo;
    }

    /**
     * Sets the shipment info.
     *
     * @param ShipmentInfo $shipmentInfo The shipment info
     *
     * @return self
     */
    public function setShipmentInfo(ShipmentInfo $shipmentInfo): RequestedShipment
    {
        $this->ShipmentInfo = $shipmentInfo;
        return $this;
    }

    /**
     * Returns the ship timestamp.
     *
     * @return ShipTimestamp
     */
    public function getShipTimestamp(): ShipTimestamp
    {
        return $this->ShipTimestamp;
    }

    /**
     * Sets the ship timestamp.
     *
     * @param string $shipTimestamp The ship timestamp
     *
     * @return self
     */
    public function setShipTimestamp(string $shipTimestamp): RequestedShipment
    {
        $this->ShipTimestamp = new ShipTimestamp($shipTimestamp);
        return $this;
    }

    /**
     * Returns the pickup location close time.
     *
     * @return null|PickupLocationCloseTime
     */
    public function getPickupLocationCloseTime(): ?PickupLocationCloseTime
    {
        return $this->PickupLocationCloseTime;
    }

    /**
     * Sets the pickup location close time.
     *
     * @param string $pickupLocationCloseTime The pickup location close time
     *
     * @return self
     */
    public function setPickupLocationCloseTime(string $pickupLocationCloseTime): RequestedShipment
    {
        $this->PickupLocationCloseTime = new PickupLocationCloseTime($pickupLocationCloseTime);
        return $this;
    }

    /**
     * Returns the special pickup instruction.
     *
     * @return null|SpecialPickupInstruction
     */
    public function getSpecialPickupInstruction(): ?SpecialPickupInstruction
    {
        return $this->SpecialPickupInstruction;
    }

    /**
     * Sets the special pickup instruction
     *
     * @param string $specialPickupInstruction The special pickup instruction
     *
     * @return self
     */
    public function setSpecialPickupInstruction(string $specialPickupInstruction): RequestedShipment
    {
        $this->SpecialPickupInstruction = new SpecialPickupInstruction($specialPickupInstruction);
        return $this;
    }

    /**
     * Returns the pickup location.
     *
     * @return null|PickupLocation
     */
    public function getPickupLocation(): ?PickupLocation
    {
        return $this->PickupLocation;
    }

    /**
     * Sets the pickup location.
     *
     * @param string $pickupLocation The pickup location
     *
     * @return self
     */
    public function setPickupLocation(string $pickupLocation): RequestedShipment
    {
        $this->PickupLocation = new PickupLocation($pickupLocation);
        return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }

    /**
     * @param PaymentInfo $PaymentInfo
     * @return self
     */
    public function setPaymentInfo($PaymentInfo)
    {
        $this->PaymentInfo = $PaymentInfo;
        return $this;
    }

    /**
     * @return docTypeRef_InternationDetailType
     */
    public function getInternationalDetail()
    {
        return $this->InternationalDetail;
    }

    /**
     * @param docTypeRef_InternationDetailType $InternationalDetail
     * @return self
     */
    public function setInternationalDetail($InternationalDetail)
    {
        $this->InternationalDetail = $InternationalDetail;
        return $this;
    }

    /**
     * @return docTypeRef_OnDemandDeliveryOptions
     */
    public function getOnDemandDeliveryOptions()
    {
        return $this->OnDemandDeliveryOptions;
    }

    /**
     * @param docTypeRef_OnDemandDeliveryOptions $OnDemandDeliveryOptions
     * @return self
     */
    public function setOnDemandDeliveryOptions($OnDemandDeliveryOptions)
    {
        $this->OnDemandDeliveryOptions = $OnDemandDeliveryOptions;
        return $this;
    }

    /**
     * @return docTypeRef_ShipType
     */
    public function getShip()
    {
        return $this->Ship;
    }

    /**
     * @param docTypeRef_ShipType $Ship
     * @return self
     */
    public function setShip($Ship)
    {
        $this->Ship = $Ship;
        return $this;
    }

    /**
     * @return docTypeRef_PackagesType
     */
    public function getPackages()
    {
        return $this->Packages;
    }

    /**
     * @param docTypeRef_PackagesType $Packages
     * @return self
     */
    public function setPackages($Packages)
    {
        $this->Packages = $Packages;
        return $this;
    }

    /**
     * @return docTypeRef_DangerousGoods
     */
    public function getDangerousGoods()
    {
        return $this->DangerousGoods;
    }

    /**
     * @param docTypeRef_DangerousGoods $DangerousGoods
     * @return self
     */
    public function setDangerousGoods($DangerousGoods)
    {
        $this->DangerousGoods = $DangerousGoods;
        return $this;
    }
}
