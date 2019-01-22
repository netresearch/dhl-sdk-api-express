<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\RateResponseInterface;

/**
 * Rate response.
 *
 * @package  Dhl\Express\Model
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateResponse implements RateResponseInterface
{
    /**
     * The rates.
     *
     * @var array
     */
    private $rates;

    /**
     * Constructor.
     *
     * @param array $rates The rates
     */
    public function __construct(array $rates)
    {
        $this->rates = $rates;
    }

    /**
     * @inheritdoc
     */
    public function getRates()
    {
        return $this->rates;
    }
}
