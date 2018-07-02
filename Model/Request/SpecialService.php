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
     * @var string
     */
    private $serviceType;

    /**
     * Special Service constructor.
     * @param string $serviceType
     */
    public function __construct(string $serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
}
