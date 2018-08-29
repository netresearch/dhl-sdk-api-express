<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Unit\Model;

use Dhl\Express\Model\Response\Rate\Rate;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $rate = new Rate(
            $serviceCode = 'Q',
            $label = 'DHL Express',
            $amount = 233.03,
            $currency = 'GBP'
        );

        self::assertInstanceOf(Rate::class, $rate);
        self::assertEquals($serviceCode, $rate->getServiceCode());
        self::assertEquals($label, $rate->getLabel());
        self::assertEquals($amount, $rate->getAmount());
        self::assertEquals($currency, $rate->getCurrencyCode());
    }
}
