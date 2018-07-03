<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\SpecialServiceInterface;

/**
 * Special Service.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SpecialService implements SpecialServiceInterface
{
    /**
     * Service Type Insurance Code
     */
    const TYPE_INSURANCE_CODE = 'IN';

    /**
     * @var string
     */
    private $serviceType;

    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * Special Service constructor.
     * @param string $serviceType
     * @param float $value
     * @param string $currencyCode
     */
    public function __construct(string $serviceType, float $value, string $currencyCode)
    {
        $this->serviceType = $serviceType;
        $this->value = $value;
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
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
