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
     * @var InsuranceServiceInterface
     */
    private $insuranceService;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->insuranceService = new InsurancesService(
            15,
            'EUR'
        );
    }

    /**
     * @test
     */
    public function testValue() {

        $this->assertInstanceOf(InsuranceServiceInterface::class, $this->insuranceService);
        $this->assertEquals(15.0, $this->insuranceService->getValue());
    }

    /**
     * @test
     */
    public function testCurrencyCode() {

        $this->assertInstanceOf(InsuranceServiceInterface::class, $this->insuranceService);
        $this->assertEquals('EUR', $this->insuranceService->getCurrencyCode());
    }
}