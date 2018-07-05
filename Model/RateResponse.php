<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Api\Data\Request\RecipientAddressInterface;
use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;
use Dhl\Express\Api\Data\Request\ShipperAddressInterface;
use Dhl\Express\Model\Request\Insurance;

/**
 * Rate Request.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateResponse implements RateResponseInterface
{
    /**
     * @var array
     */
    private $rates;

    /**
     * RateResponse constructor.
     *
     * @param array $rates
     */
    public function __construct(array $rates)
    {
        $this->rates = $rates;
    }

    /**
     * @return RateInterface[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }
}
