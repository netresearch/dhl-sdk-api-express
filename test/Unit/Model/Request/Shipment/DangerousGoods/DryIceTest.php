<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request\Shipment\DangerousGoods;

use Dhl\Express\Model\Request\Shipment\DangerousGoods\DryIce;
use PHPUnit\Framework\TestCase;

/**
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class DryIceTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {

        $dryIce = new DryIce(
            $unCode = 'UN1845',
            $weight = 20.53
        );

        self::assertInstanceOf(DryIce::class, $dryIce);
        self::assertSame(DryIce::CONTENT_ID, $dryIce->getContentId());
        self::assertSame($unCode, $dryIce->getUNCode());
        self::assertSame($weight, $dryIce->getWeight());
    }
}
