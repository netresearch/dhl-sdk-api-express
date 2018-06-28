<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\InsuranceServiceInterface;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class InsuranceServiceTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $insurance = new InsuranceService(
            $monetaryValue = 15,
            $currencyCode = 'EUR'
        );

        $this->assertInstanceOf(InsuranceServiceInterface::class, $insurance);
        $this->assertEquals($monetaryValue, $insurance->getValue());
    }
}
