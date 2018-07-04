<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request;

use Dhl\Express\Api\Data\Request\PackageInterface;
use Dhl\Express\Model\Request\Package;
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
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $package = new Package(
            $sequenceNumber = 1,
            $weight = 1.123,
            $length = 1.123,
            $width = 1.123,
            $height = 1.123
        );

        $this->assertInstanceOf(PackageInterface::class, $package);
        $this->assertEquals($sequenceNumber, $package->getSequenceNumber());
        $this->assertEquals($weight, $package->getWeight());
        $this->assertEquals($length, $package->getLength());
        $this->assertEquals($width, $package->getWidth());
        $this->assertEquals($height, $package->getHeight());
    }
}
