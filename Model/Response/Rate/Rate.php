<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response\Rate;

use Dhl\Express\Api\Data\Response\Rate\RateInterface;

/**
 * Rate response item.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Rate implements RateInterface
{
    /**
     * The service code.
     *
     * @var string
     */
    private $serviceCode;

    /**
     * The label.
     *
     * @var string
     */
    private $label;

    /**
     * The amount.
     *
     * @var float
     */
    private $amount;

    /**
     * The currency code.
     *
     * @var string
     */
    private $currencyCode;

    /**
     * The delivery time.
     *
     * @var \DateTime
     */
    private $deliveryTime;

    /**
     * Rate constructor.
     *
     * @param string $serviceCode  The service code
     * @param string $label        The label
     * @param float  $amount       The amount
     * @param string $currencyCode The currency code
     */
    public function __construct($serviceCode, $label, $amount, $currencyCode)
    {
        $this->serviceCode  = $serviceCode;
        $this->label        = $label;
        $this->amount       = $amount;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @inheritdoc
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @inheritdoc
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @inheritdoc
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @inheritdoc
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets the delivery date/time.
     *
     * @param \DateTime $deliveryTime The delivery date/time
     *
     * @return Rate
     */
    public function setDeliveryTime(\DateTime $deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * Returns the delivery date/time.
     *
     * @return \DateTime
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }
}
