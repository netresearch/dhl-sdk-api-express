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
     * If the Rate Response should contain the value added services
     *
     * @var bool
     */
    private $requestValueAddedServices;

    /**
     * Sets if products for the next day should be fetched if the DHL cutoff time is exceeded
     *
     * @var bool
     */
    private $nextBusinessDayIndicator;

    /**
     * Constructor.
     *
     * @param bool $unscheduledPickup Whether this is a scheduled pickup or not
     * @param string $termsOfTrade The terms of trade
     * @param string $contentType The content type
     * @param \DateTime $readyAtTimestamp The ship time
     * @param bool $requestValueAddedServices If the Rate Response should contain the value added services
     * @param bool $nextBusinessDayIndicator
     */
    public function __construct(
        $unscheduledPickup,
        $termsOfTrade,
        $contentType,
        $readyAtTimestamp,
        $requestValueAddedServices,
        $nextBusinessDayIndicator
    ) {
        $this->unscheduledPickup = $unscheduledPickup;
        $this->termsOfTrade = $termsOfTrade;
        $this->contentType = $contentType;
        $this->readyAtTimestamp = $readyAtTimestamp;
        $this->requestValueAddedServices = $requestValueAddedServices;
        $this->nextBusinessDayIndicator = $nextBusinessDayIndicator;
    }

    public function isUnscheduledPickup()
    {
        return (bool)$this->unscheduledPickup;
    }

    public function isRegularPickup()
    {
        return !$this->unscheduledPickup;
    }

    public function getTermsOfTrade()
    {
        return (string)$this->termsOfTrade;
    }

    public function getContentType()
    {
        return (string)$this->contentType;
    }

    public function getReadyAtTimestamp()
    {
        return $this->readyAtTimestamp;
    }

    public function isValueAddedServicesRequested()
    {
        return (bool)$this->requestValueAddedServices;
    }

    public function isNextBusinessDayIndicator()
    {
        return (bool)$this->nextBusinessDayIndicator;
    }
}
