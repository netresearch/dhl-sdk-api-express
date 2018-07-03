<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\Common\PaymentInfo;
use Dhl\Express\Webservice\Soap\Type\Common\ShipTimestamp;

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
     * @var InternationalDetail
     */
    private $InternationalDetail;

    /**
     * @var null|OnDemandDeliveryOptions
     */
    private $OnDemandDeliveryOptions;

    /**
     * @var Ship
     */
    private $Ship;

    /**
     * @var Packages
     */
    private $Packages;

    /**
     * @var null|DangerousGoods
     */
    private $DangerousGoods;

    /**
     * Constructor.
     *
     * @param ShipmentInfo        $shipmentInfo        The shipment info
     * @param string              $shipTimestamp       The shipping timestamp
     * @param string              $paymentInfo         The payment info
     * @param InternationalDetail $internationalDetail The international detail
     * @param Ship                $ship                The shipper/recipient address section
     * @param Packages            $packages            The packages section
     */
    public function __construct(
        ShipmentInfo $shipmentInfo,
        string $shipTimestamp,
        string $paymentInfo,
        InternationalDetail $internationalDetail,
        Ship $ship,
        Packages $packages
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
     * Returns the payment info.
     *
     * @return PaymentInfo
     */
    public function getPaymentInfo(): PaymentInfo
    {
        return $this->PaymentInfo;
    }

    /**
     * Sets the payment info.
     *
     * @param string $paymentInfo The payment info
     *
     * @return self
     */
    public function setPaymentInfo(string $paymentInfo): RequestedShipment
    {
        $this->PaymentInfo = new PaymentInfo($paymentInfo);
        return $this;
    }

    /**
     * Returns the international detail.
     *
     * @return InternationalDetail
     */
    public function getInternationalDetail()
    {
        return $this->InternationalDetail;
    }

    /**
     * Sets the international detail.
     *
     * @param InternationalDetail $internationalDetail The international detail
     *
     * @return self
     */
    public function setInternationalDetail(InternationalDetail $internationalDetail): RequestedShipment
    {
        $this->InternationalDetail = $internationalDetail;
        return $this;
    }

    /**
     * Returns the on demand delivery options.
     *
     * @return null|OnDemandDeliveryOptions
     */
    public function getOnDemandDeliveryOptions(): ?OnDemandDeliveryOptions
    {
        return $this->OnDemandDeliveryOptions;
    }

    /**
     * Sets the on demand delivery options.
     *
     * @param OnDemandDeliveryOptions $onDemandDeliveryOptions The on demand delivery options
     *
     * @return self
     */
    public function setOnDemandDeliveryOptions(OnDemandDeliveryOptions $onDemandDeliveryOptions): RequestedShipment
    {
        $this->OnDemandDeliveryOptions = $onDemandDeliveryOptions;
        return $this;
    }

    /**
     * Returns the shipper/recipients and optional pickup addresses.
     *
     * @return Ship
     */
    public function getShip(): Ship
    {
        return $this->Ship;
    }

    /**
     * Sets the shipper/recipients and optional pickup addresses.
     *
     * @param Ship $ship The ship section
     *
     * @return self
     */
    public function setShip(Ship $ship): RequestedShipment
    {
        $this->Ship = $ship;
        return $this;
    }

    /**
     * Returns the packages section.
     *
     * @return Packages
     */
    public function getPackages(): Packages
    {
        return $this->Packages;
    }

    /**
     * Sets the packages section.
     *
     * @param Packages $packages The packages
     *
     * @return self
     */
    public function setPackages(Packages $packages): RequestedShipment
    {
        $this->Packages = $packages;
        return $this;
    }

    /**
     * Returns the dangerous goods section.
     *
     * @return null|DangerousGoods
     */
    public function getDangerousGoods(): ?DangerousGoods
    {
        return $this->DangerousGoods;
    }

    /**
     * Sets the dangerous goods section.
     *
     * @param DangerousGoods $dangerousGoods The dangerous goods section
     *
     * @return self
     */
    public function setDangerousGoods(DangerousGoods $dangerousGoods): RequestedShipment
    {
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
}
