<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceInterface;
use Dhl\Express\Model\Request\Insurance;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
