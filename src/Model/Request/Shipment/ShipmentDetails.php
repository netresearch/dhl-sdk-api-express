<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Webservice\Soap\Type\Common\Billing\ShippingPaymentType;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\PaymentInfo;

/**
 * Shipment Details.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentDetails implements ShipmentDetailsInterface
{
    /**
     * Pickup types.
     *
     * @see DropOffType
     */
    const REGULAR_PICKUP = DropOffType::REGULAR_PICKUP;
    const UNSCHEDULED_PICKUP = DropOffType::REQUEST_COURIER;

    /**
     * Content types.
     *
     * @see Content
     */
    const CONTENT_TYPE_DOCUMENTS = Content::DOCUMENTS;
    const CONTENT_TYPE_NON_DOCUMENTS = Content::NON_DOCUMENTS;

    /**
     * Payment info types.
     *
     * @see PaymentInfo
     */
    const PAYMENT_TYPE_CFR = PaymentInfo::CFR;
    const PAYMENT_TYPE_CIF = PaymentInfo::CIF;
    const PAYMENT_TYPE_CIP = PaymentInfo::CIP;
    const PAYMENT_TYPE_CPT = PaymentInfo::CPT;
    const PAYMENT_TYPE_DAF = PaymentInfo::DAF;
    const PAYMENT_TYPE_DDP = PaymentInfo::DDP;
    const PAYMENT_TYPE_DDU = PaymentInfo::DDU;
    const PAYMENT_TYPE_DAP = PaymentInfo::DAP;
    const PAYMENT_TYPE_DEQ = PaymentInfo::DEQ;
    const PAYMENT_TYPE_DES = PaymentInfo::DES;
    const PAYMENT_TYPE_EXW = PaymentInfo::EXW;
    const PAYMENT_TYPE_FAS = PaymentInfo::FAS;
    const PAYMENT_TYPE_FCA = PaymentInfo::FCA;
    const PAYMENT_TYPE_FOB = PaymentInfo::FOB;

    /**
     * Shipping payment types.
     *
     * @see ShippingPaymentType
     */
    const SHIPPING_PAYMENT_TYPE_R = ShippingPaymentType::R;
    const SHIPPING_PAYMENT_TYPE_S = ShippingPaymentType::S;
    const SHIPPING_PAYMENT_TYPE_T = ShippingPaymentType::T;

    /**
     * Whether this is a scheduled pickup or not.
     *
     * @var bool
     */
    private $unscheduledPickup;

    /**
     * The terms of trade.
     *
     * @var string
     */
    private $termsOfTrade;

    /**
     * The content type.
     *
     * @var string
     */
    private $contentType;

    /**
     * The ship time.
     *
     * @var \DateTime
     */
    private $readyAtTimestamp;

    /**
     * The number of pieces.
     *
     * @var int
     */
    private $numberOfPieces;

    /**
     * The currency code.
     *
     * @var string
     */
    private $currencyCode;

    /**
     * The description.
     *
     * @var string
     */
    private $description;

    /**
     * The customs value.
     *
     * @var float
     */
    private $customsValue;

    /**
     * The service type.
     *
     * @var string
     */
    private $serviceType;

    /**
     * ShipmentDetails constructor.
     *
     * @param bool $unscheduledPickup
     * @param string $termsOfTrade
     * @param string $contentType
     * @param \DateTime $readyAtTimestamp
     * @param int $numberOfPieces
     * @param string $currencyCode
     * @param string $description
     * @param float $customsValue
     * @param string $serviceType
     */
    public function __construct(
        $unscheduledPickup,
        $termsOfTrade,
        $contentType,
        $readyAtTimestamp,
        $numberOfPieces,
        $currencyCode,
        $description,
        $customsValue,
        $serviceType
    ) {
        $this->unscheduledPickup = $unscheduledPickup;
        $this->termsOfTrade = $termsOfTrade;
        $this->contentType = $contentType;
        $this->readyAtTimestamp = $readyAtTimestamp;
        $this->numberOfPieces = $numberOfPieces;
        $this->currencyCode = $currencyCode;
        $this->description = $description;
        $this->customsValue = $customsValue;
        $this->serviceType = $serviceType;
    }

    public function isUnscheduledPickup()
    {
        return (bool) $this->unscheduledPickup;
    }

    public function isRegularPickup()
    {
        return !$this->unscheduledPickup;
    }

    public function getTermsOfTrade()
    {
        return (string) $this->termsOfTrade;
    }

    public function getContentType()
    {
        return (string) $this->contentType;
    }

    public function getReadyAtTimestamp()
    {
        return $this->readyAtTimestamp;
    }

    public function getNumberOfPieces()
    {
        return (int) $this->numberOfPieces;
    }

    public function getCurrencyCode()
    {
        return (string) $this->currencyCode;
    }

    public function getDescription()
    {
        return (string) $this->description;
    }

    public function getCustomsValue()
    {
        return (float) $this->customsValue;
    }

    public function getServiceType()
    {
        return (string) $this->serviceType;
    }
}
