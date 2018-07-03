<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceInterface;

/**
 * Insurance.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Insurance implements InsuranceInterface
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
     * Insurance constructor.
     * @param float $value
     * @param string $currencyCode
     */
    public function __construct(float $value, string $currencyCode)
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
