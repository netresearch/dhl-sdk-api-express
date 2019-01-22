<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request;

use Dhl\Express\Api\Data\Request\Rate\ShipperAddressInterface;
use Dhl\Express\Model\Request\Rate\ShipperAddress;
use PHPUnit\Framework\TestCase;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class ShipperAddressTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $shipperAddress = new ShipperAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin'
        );

        self::assertInstanceOf(ShipperAddressInterface::class, $shipperAddress);
        self::assertSame($countryCode, $shipperAddress->getCountryCode());
        self::assertSame($postalCode, $shipperAddress->getPostalCode());
        self::assertSame($city, $shipperAddress->getCity());
    }
}
