<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service;

/**
 * The total net section.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TotalNet
{
    /**
     * This the currency of the rated shipment for the product listed.
     *
     * @var string
     */
    private $Currency;

    /**
     * This is the total prize of the rated shipment for the product listed.
     *
     * @var float
     */
    private $Amount;

    /**
     * The currency type the total is expressed in.
     *
     * Possible values:
     * - ‘BILLC’, billing currency
     * - ‘PULCL’, country public rates currency
     * - ‘BASEC’, base currency
     *
     * @var string $type
     */
    protected $type = '';

    /**
     * Returns the currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Returns the amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return (float) $this->Amount;
    }

    /**
     * Returns the currency type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
