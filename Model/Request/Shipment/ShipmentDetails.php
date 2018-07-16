<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\PaymentInfo;

/**
 * Shipment Details.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentDetails implements ShipmentDetailsInterface
{
    /**
     * Pickup types.
     *
     * @see DropOffType
     */
    public const REGULAR_PICKUP = DropOffType::REGULAR_PICKUP;
    public const UNSCHEDULED_PICKUP = DropOffType::REQUEST_COURIER;

    /**
     * Content types.
     *
     * @see Content
     */
    public const CONTENT_TYPE_DOCUMENTS = Content::DOCUMENTS;
    public const CONTENT_TYPE_NON_DOCUMENTS = Content::NON_DOCUMENTS;

    /**
     * Payment info types.
     *
     * @see PaymentInfo
     */
    public const PAYMENT_TYPE_CFR = PaymentInfo::CFR;
    public const PAYMENT_TYPE_CIF = PaymentInfo::CIF;
    public const PAYMENT_TYPE_CIP = PaymentInfo::CIP;
    public const PAYMENT_TYPE_CPT = PaymentInfo::CPT;
    public const PAYMENT_TYPE_DAF = PaymentInfo::DAF;
    public const PAYMENT_TYPE_DDP = PaymentInfo::DDP;
    public const PAYMENT_TYPE_DDU = PaymentInfo::DDU;
    public const PAYMENT_TYPE_DAP = PaymentInfo::DAP;
    public const PAYMENT_TYPE_DEQ = PaymentInfo::DEQ;
    public const PAYMENT_TYPE_DES = PaymentInfo::DES;
    public const PAYMENT_TYPE_EXW = PaymentInfo::EXW;
    public const PAYMENT_TYPE_FAS = PaymentInfo::FAS;
    public const PAYMENT_TYPE_FCA = PaymentInfo::FCA;
    public const PAYMENT_TYPE_FOB = PaymentInfo::FOB;

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
     * The ship timestamp.
     *
     * @var int
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
     * @param bool $unscheduledPickup
     * @param string $termsOfTrade
     * @param string $contentType
     * @param int $readyAtTimestamp
     * @param int $numberOfPieces
     * @param string $currencyCode
     * @param string $description
     * @param float $customsValue
     * @param string $serviceType
     */
    public function __construct(
        bool $unscheduledPickup,
        string $termsOfTrade,
        string $contentType,
        int $readyAtTimestamp,
        int $numberOfPieces,
        string $currencyCode,
        string $description,
        float $customsValue,
        string $serviceType
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

    /**
     * @return bool
     */
    public function isUnscheduledPickup(): bool
    {
        return $this->unscheduledPickup;
    }

    /**
     * @return bool
     */
    public function isRegularPickup(): bool
    {
        return !$this->unscheduledPickup;
    }

    /**
     * @return string
     */
    public function getTermsOfTrade(): string
    {
        return $this->termsOfTrade;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @return int
     */
    public function getReadyAtTimestamp(): int
    {
        return $this->readyAtTimestamp;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces(): int
    {
        return $this->numberOfPieces;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getCustomsValue(): float
    {
        return $this->customsValue;
    }

    /**
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
}
