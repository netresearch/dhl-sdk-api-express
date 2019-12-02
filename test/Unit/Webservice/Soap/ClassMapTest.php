<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap;

use Dhl\Express\Webservice\Soap\ClassMap;

/**
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class ClassMapTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function typesInClassMapExist()
    {
        $types = ClassMap::get();

        self::assertInternalType('array', $types);
        self::assertNotEmpty($types);

        foreach ($types as $type) {
            self::assertInternalType('string', $type);
            self::assertTrue(class_exists($type), "$type does not exist.");
        }
    }
}
