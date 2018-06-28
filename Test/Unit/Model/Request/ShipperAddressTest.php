<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ShipperAddressInterface;
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

        $this->assertInstanceOf(ShipperAddressInterface::class, $shipperAddress);
        $this->assertEquals($countryCode, $shipperAddress->getCountryCode());
        $this->assertEquals($postalCode, $shipperAddress->getPostalCode());
        $this->assertEquals($city, $shipperAddress->getCity());
    }
}
