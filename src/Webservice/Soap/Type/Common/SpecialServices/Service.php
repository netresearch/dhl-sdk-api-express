<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;

use Dhl\Express\Webservice\Soap\Type\Common\CurrencyCode;
use Dhl\Express\Webservice\Soap\Type\Common\Date;
use Dhl\Express\Webservice\Soap\Type\Common\Money;

/**
 * A special service.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Service
{
    /**
     * Enter II if you wish to get a quote for Insurance with your prospect shipment. If not needed
     * then leave the SpecialServices section out.
     *
     * @var ServiceType
     */
    private $ServiceType;

    /**
     * Monetary value of service (e.g. Insured Value) – this is needed if you wish to get a quote on
     * Insurance with your prospect shipment.
     *
     * @var null|Money
     */
    private $ServiceValue;

    /**
     * Currency code – this is needed if you wish to get a quote on Insurance with your prospect shipment.
     *
     * @var null|CurrencyCode
     */
    private $CurrencyCode;

    /**
     * For future use.
     *
     * @var null|PaymentCode
     */
    private $PaymentCode;

    /**
     * For future use.
     *
     * @var null|Date
     */
    private $StartDate;

    /**
     * For future use.
     *
     * @var null|Date
     */
    private $EndDate;

    /**
     * For future use.
     *
     * @var null|TextInstruction
     */
    private $TextInstruction;

    /**
     * Constructor.
     *
     * @param string $serviceType The service type
     */
    public function __construct($serviceType)
    {
        $this->setServiceType($serviceType);
    }

    /**
     * Returns the service type.
     *
     * @return ServiceType
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * Sets the service type.
     *
     * @param string $serviceType The service type
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = new ServiceType($serviceType);
        return $this;
    }

    /**
     * Returns the service value.
     *
     * @return null|Money
     */
    public function getServiceValue()
    {
        return $this->ServiceValue;
    }

    /**
     * Sets the service value.
     *
     * @param float $serviceValue The service value
     *
     * @return self
     */
    public function setServiceValue($serviceValue)
    {
        $this->ServiceValue = new Money($serviceValue);
        return $this;
    }

    /**
     * Returns the currency code.
     *
     * @return null|CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Sets the currency code.
     *
     * @param string $currencyCode The currency code
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->CurrencyCode = new CurrencyCode($currencyCode);
        return $this;
    }

    /**
     * Returns the payment code.
     *
     * @return null|PaymentCode
     */
    public function getPaymentCode()
    {
        return $this->PaymentCode;
    }

    /**
     * Sets the payment code.
     *
     * @param string $paymentCode The payment code
     *
     * @return self
     */
    public function setPaymentCode($paymentCode)
    {
        $this->PaymentCode = new PaymentCode($paymentCode);
        return $this;
    }

    /**
     * Returns the start date.
     *
     * @return null|Date
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets the start date.
     *
     * @param int|string|\DateTime $startDate The start date (timestamp, date string or \DateTime instance)
     *
     * @return self
     * @throws \Exception
     */
    public function setStartDate($startDate)
    {
        $this->StartDate = new Date($startDate);
        return $this;
    }

    /**
     * Returns the end date.
     *
     * @return null|Date
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets the end date
     *
     * @param int|string|\DateTime $endDate The end date (timestamp, date string or \DateTime instance)
     *
     * @return self
     * @throws \Exception
     */
    public function setEndDate($endDate)
    {
        $this->EndDate = new Date($endDate);
        return $this;
    }

    /**
     * Returns the text instruction.
     *
     * @return null|TextInstruction
     */
    public function getTextInstruction()
    {
        return $this->TextInstruction;
    }

    /**
     * Sets the text instruction.
     *
     * @param string $textInstruction The text instruction
     *
     * @return self
     */
    public function setTextInstruction($textInstruction)
    {
        $this->TextInstruction = new TextInstruction($textInstruction);
        return $this;
    }
}
