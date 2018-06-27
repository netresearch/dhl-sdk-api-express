<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;
use PHPUnit\Framework\TestCase;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class ShipmentDetailsTest extends TestCase
{
    /**
     * @test
     */
    public function defineUnscheduledPickup()
    {
        /** @var ShipmentDetailsInterface $shipmentDetails */
        $shipmentDetails = new ShipmentDetails($unscheduledPickup = true);

        $this->assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        $this->assertFalse($shipmentDetails->isRegularPickup());
        $this->assertTrue($shipmentDetails->isUnscheduledPickup());
    }

    /**
     * @test
     */
    public function defineRegularPickup()
    {
        /** @var ShipmentDetailsInterface $shipmentDetails */
        $shipmentDetails = new ShipmentDetails($unscheduledPickup = false);

        $this->assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        $this->assertTrue($shipmentDetails->isRegularPickup());
        $this->assertFalse($shipmentDetails->isUnscheduledPickup());
    }
}
