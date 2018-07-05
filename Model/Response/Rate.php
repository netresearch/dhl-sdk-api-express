<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Response;

use Dhl\Express\Api\Data\Response\RateInterface;

/**
 * Rate Response Item.
 *
 * DTO that carries web service operation results.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Rate implements RateInterface
{
    /**
     * @var string
     */
    private $serviceCode;

    /**
     * @var string
     */
    private $label;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * Rate constructor.
     *
     * @param string $serviceCode
     * @param string $label
     * @param float  $amount
     * @param string $currencyCode
     */
    public function __construct(string $serviceCode, string $label, float $amount, string $currencyCode)
    {
        $this->serviceCode  = $serviceCode;
        $this->label        = $label;
        $this->amount       = $amount;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}
