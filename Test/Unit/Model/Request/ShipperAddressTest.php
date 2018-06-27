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
     * @var ShipperAddressInterface
     */
    private $shipperAddress;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->shipperAddress = new ShipperAddress(
            'Berlin',
            '12345',
            49
        );
    }

    /**
     * @test
     */
    public function testRecipientAddressType()
    {
        $this->assertInstanceOf(ShipperAddressInterface::class, $this->shipperAddress);
    }

    /**
     * @test
     */
    public function testCity()
    {
        $this->assertEquals($this->shipperAddress->getCity(), 'Berlin');
    }

    /**
     * @test
     */
    public function testPostalCode()
    {
        $this->assertEquals($this->shipperAddress->getPostalCode(), '12345');
    }

    /**
     * @test
     */
    public function testCountryCode()
    {
        $this->assertEquals($this->shipperAddress->getCountryCode(), '49');
    }
}
