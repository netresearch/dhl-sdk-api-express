<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\ServiceType;

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
	 * @var string
	 */
	private $type;

    /**
     * Constructor.
     *
     * @param float  $value        The value of the insurance
     * @param string $currencyCode The currency code
     * @param string $type         The currency code
     */
    public function __construct($value, $currencyCode, $type)
    {
        $this->value        = $value;
        $this->currencyCode = $currencyCode;
	    $this->type         = empty($type) ? ServiceType::TYPE_INSURANCE : $type;
    }

    public function getValue()
    {
        return (float) $this->value;
    }

    public function getCurrencyCode()
    {
        return (string) $this->currencyCode;
    }
    
	public function getType()
	{
		return (string) $this->type;
	}

}
