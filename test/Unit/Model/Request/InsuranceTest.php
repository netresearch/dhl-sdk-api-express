<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Model\Request\Insurance;
use PHPUnit\Framework\TestCase;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class InsuranceTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $insurance = new Insurance(
            $value = 99.99,
            $currencyCode = 'EUR'
        );

        self::assertInstanceOf(InsuranceInterface::class, $insurance);
        self::assertSame($value, $insurance->getValue());
        self::assertSame($currencyCode, $insurance->getCurrencyCode());
    }
}
