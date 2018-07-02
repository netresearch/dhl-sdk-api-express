<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;

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
    const REGULAR_PICKUP = 'REGULAR_PICKUP';
    const UNSCHEDULED_PICKUP = 'REQUEST_COURIER';
    const CONTENT_TYPE_DOCUMENTS = 'DOCUMENTS';
    const CONTENT_TYPE_NON_DOCUMENTS = 'NON_DOCUMENTS';

    /**
     * @var bool
     */
    private $unscheduledPickup;

    /**
     * @var string
     */
    private $termsOfTrade;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var string
     */
    private $dimensionsUOM;

    /**
     * @var string
     */
    private $weightUOM;

    /**
     * @var int
     */
    private $readyAtTimestamp;

    /**
     * ShipmentDetails constructor.
     * @param bool $unscheduledPickup
     * @param string $termsOfTrade
     * @param string $contentType
     * @param string $dimensionsUOM
     * @param string $weightUOM
     * @param int $readyAtTimestamp
     */
    public function __construct(
        bool $unscheduledPickup,
        string $termsOfTrade,
        string $contentType,
        string $dimensionsUOM,
        string $weightUOM,
        int $readyAtTimestamp
    ) {
        $this->unscheduledPickup = $unscheduledPickup;
        $this->termsOfTrade = $termsOfTrade;
        $this->contentType = $contentType;
        $this->dimensionsUOM = $dimensionsUOM;
        $this->weightUOM = $weightUOM;
        $this->readyAtTimestamp = $readyAtTimestamp;
    }

    /**
     * @return bool
     */
    public function isRegularPickup(): bool
    {
        return !$this->unscheduledPickup;
    }

    /**
     * @return bool
     */
    public function isUnscheduledPickup(): bool
    {
        return $this->unscheduledPickup;
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
     * @return string
     */
    public function getDimensionsUOM(): string
    {
        return $this->dimensionsUOM;
    }

    /**
     * @return string
     */
    public function getWeightUOM(): string
    {
        return $this->weightUOM;
    }

    /**
     * @return int
     */
    public function getReadyAtTimestamp(): int
    {
        return $this->readyAtTimestamp;
    }
}
