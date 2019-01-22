<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service;

/**
 * The total net section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
}
