<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
        $this->assertInternalType('array', $types);
        $this->assertNotEmpty($types);
        foreach ($types as $type) {
            self::assertInternalType('string', $type);
            self::assertTrue(class_exists($type), "$type does not exist.");
        }
    }
}
