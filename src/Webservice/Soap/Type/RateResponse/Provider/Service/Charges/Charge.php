<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service\Charges;

/**
 * The charge section.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Charge
{
    /**
     * Special service or extra charge code – this is the code you would have to use in the SoapShipmentRequest
     * message if you wish to add an optional Service such as Insurance.
     *
     * @var null|string
     */
    private $ChargeCode;

    /**
     * Name of the Value Added Service.
     *
     * @var string
     */
    private $ChargeType;

    /**
     * The charge amount of the line item charge.
     *
     * @var string
     */
    private $ChargeAmount;

    /**
     * Returns the charge code.
     *
     * @return null|string
     */
    public function getChargeCode()
    {
        return $this->ChargeCode;
    }

    /**
     * Returns the charge type.
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }

    /**
     * Returns the charge amount.
     *
     * @return float
     */
    public function getChargeAmount()
    {
        return (float) $this->ChargeAmount;
    }
}
