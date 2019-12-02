<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\PackageInterface;
use Dhl\Express\Model\Request\Rate\Package;
use PHPUnit\Framework\TestCase;

/**
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
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
            $weightUOM  = Package::UOM_WEIGHT_KG,
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = Package::UOM_DIMENSION_CM
        );

        self::assertInstanceOf(PackageInterface::class, $package);
        self::assertSame($sequenceNumber, $package->getSequenceNumber());
        self::assertSame($weight, $package->getWeight());
        self::assertSame($weightUOM, $package->getWeightUOM());
        self::assertSame($length, $package->getLength());
        self::assertSame($width, $package->getWidth());
        self::assertSame($height, $package->getHeight());
        self::assertSame($dimensionUOM, $package->getDimensionsUOM());
    }

    /**
     * @test
     */
    public function invalidWeightUOM()
    {
        $this->expectException(\InvalidArgumentException::class);

        new Package(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM  = 'test',
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = Package::UOM_DIMENSION_CM
        );
    }

    /**
     * @test
     */
    public function invalidDimensionsUOM()
    {
        $this->expectException(\InvalidArgumentException::class);

        new Package(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM  = Package::UOM_WEIGHT_KG,
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = 'test'
        );
    }
}
