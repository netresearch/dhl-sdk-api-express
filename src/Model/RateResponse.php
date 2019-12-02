<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model;

use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Api\Data\Response\Rate\RateInterface;

/**
 * Rate response.
 *
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateResponse implements RateResponseInterface
{
    /**
     * The rates.
     *
     * @var RateInterface[]
     */
    private $rates;

    /**
     * Constructor.
     *
     * @param RateInterface[] $rates The rates
     */
    public function __construct(array $rates)
    {
        $this->rates = $rates;
    }

    public function getRates()
    {
        return $this->rates;
    }
}
