<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceInterface;

/**
 * Insurance.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Insurance implements InsuranceInterface
{
    /**
     * The value of the insurance.
     *
     * @var float
     */
    private $value;

    /**
     * The currency code.
     *
     * @var string
     */
    private $currencyCode;

    /**
     * Constructor.
     *
     * @param float  $value        The value of the insurance
     * @param string $currencyCode The currency code
     */
    public function __construct($value, $currencyCode)
    {
        $this->value        = $value;
        $this->currencyCode = $currencyCode;
    }

    public function getValue()
    {
        return (float) $this->value;
    }

    public function getCurrencyCode()
    {
        return (string) $this->currencyCode;
    }
}
