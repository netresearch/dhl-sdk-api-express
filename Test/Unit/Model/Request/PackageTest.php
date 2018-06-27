<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\PackageInterface;
use PHPUnit\Framework\TestCase;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class PackageTest extends TestCase
{
    /**
     * @var PackageInterface
     */
    private $package;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->package = new Package(
            1,
            1.123,
            'cm',
            1.123,
            1.123,
            1.123,
            'cm',
            '2010-02-05T14:00:00 GMT+01:00',
            'NON_DOCUMENTS',
            'CFR'
        );
    }

    /**
     * @test
     */
    public function testPackageType()
    {
        $this->assertInstanceOf(PackageInterface::class, $this->package);
    }

    /**
     * @test
     */
    public function testSequenceNumber()
    {
        $this->assertEquals($this->package->getSequenceNumber(), 1);
    }

    /**
     * @test
     */
    public function testWeight()
    {
        $this->assertEquals($this->package->getWeight(), 1.123);
    }

    /**
     * @test
     */
    public function testWeightUOM()
    {
        $this->assertEquals($this->package->getWeightUOM(), 'cm');
    }

    /**
     * @test
     */
    public function testLength()
    {
        $this->assertEquals($this->package->getLength(), 1.123);
    }

    /**
     * @test
     */
    public function testWidth()
    {
        $this->assertEquals($this->package->getWidth(), 1.123);
    }

    /**
     * @test
     */
    public function testHeight()
    {
        $this->assertEquals($this->package->getHeight(), 1.123);
    }

    /**
     * @test
     */
    public function testDimensionsUOM()
    {
        $this->assertEquals($this->package->getDimensionsUOM(), 'cm');
    }

    /**
     * @test
     */
    public function testReadyAtDate()
    {
        $this->assertEquals($this->package->getReadyAtDate(), '2010-02-05T14:00:00 GMT+01:00');
    }

    /**
     * @test
     */
    public function testContentType()
    {
        $this->assertEquals($this->package->getContentType(), 'NON_DOCUMENTS');
    }

    /**
     * @test
     */
    public function testTermsOfTrade()
    {
        $this->assertEquals($this->package->getTermsOfTrade(), 'CFR');
    }
}
