<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Unit\Model;

use Dhl\Express\Model\RateResponse;
use Dhl\Express\Model\Response\Rate\Rate;
use PHPUnit\Framework\TestCase;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateResponseTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $rate1 = new Rate(
            $serviceCode = 'Q',
            $label = 'DHL Express',
            $amount = 233.03,
            $currency = 'GBP'
        );

        $rate2 = new Rate(
            $serviceCode = 'Y',
            $label = 'MEDICAL EXPRESS',
            $amount = 10.99,
            $currency = 'GBP'
        );

        $rates = [$rate1, $rate2];

        $rateResponse = new RateResponse($rates);

        self::assertInstanceOf(RateResponse::class, $rateResponse);
        self::assertSameSize($rates, $rateResponse->getRates());
        self::assertEquals($rate1, $rateResponse->getRates()[0]);
        self::assertEquals($rate2, $rateResponse->getRates()[1]);
    }
}
