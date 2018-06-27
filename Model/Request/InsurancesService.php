<?php
/**
 * See LICENSE.md for license details.
 */


namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceServiceInterface;

/**
 * Shipment Details.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class InsurancesService implements InsuranceServiceInterface
{
    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * InsurancesService constructor.
     * @param $value
     * @param $currencyCode
     */
    public function __construct($value, $currencyCode)
    {
        $this->value = $value;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
}
