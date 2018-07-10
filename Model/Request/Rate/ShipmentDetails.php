<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\ShipmentDetailsInterface;
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
    public const REGULAR_PICKUP     = DropOffType::REGULAR_PICKUP;
    public const UNSCHEDULED_PICKUP = DropOffType::REQUEST_COURIER;

    /**
     * Content types.
     *
     * @see Content
     */
    public const CONTENT_TYPE_DOCUMENTS     = Content::DOCUMENTS;
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
     * Constructor.
     *
     * @param bool   $unscheduledPickup Whether this is a scheduled pickup or not
     * @param string $termsOfTrade      The terms of trade
     * @param string $contentType       The content type
     * @param int    $readyAtTimestamp  The ship timestamp
     */
    public function __construct(
        bool $unscheduledPickup,
        string $termsOfTrade,
        string $contentType,
        int $readyAtTimestamp
    ) {
        $this->unscheduledPickup = $unscheduledPickup;
        $this->termsOfTrade      = $termsOfTrade;
        $this->contentType       = $contentType;
        $this->readyAtTimestamp  = $readyAtTimestamp;
    }

    /**
     * @return bool
     */
    public function isRegularPickup(): bool
    {
        return !$this->unscheduledPickup;
    }

    /**
     * @inheritdoc
     */
    public function isUnscheduledPickup(): bool
    {
        return $this->unscheduledPickup;
    }

    /**
     * @inheritdoc
     */
    public function getTermsOfTrade(): string
    {
        return $this->termsOfTrade;
    }

    /**
     * @inheritdoc
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @inheritdoc
     */
    public function getReadyAtTimestamp(): int
    {
        return $this->readyAtTimestamp;
    }
}
