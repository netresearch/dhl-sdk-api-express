<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * The list of charges section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Charges
{
    /**
     * This the currency for all line item charges listed in the Charge section
     *
     * @var string
     */
    private $Currency;

    /**
     * List of charge sections.
     *
     * @var array|Charge[]
     */
    private $Charge;

    /**
     * Returns the currency of all charges.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Returns list of charge sections.
     *
     * @return array|Charge[]
     */
    public function getCharge(): array
    {
        return $this->Charge;
    }
}
