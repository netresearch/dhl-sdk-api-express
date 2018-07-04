<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request;

use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;
use Dhl\Express\Model\Request\ShipmentDetails;
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
    public function defineUnscheduledPickupWithDocuments()
    {
        /** @var ShipmentDetailsInterface $shipmentDetails */
        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = true,
            $termsOfTrade = 'CFR',
            $contentType = ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $dimensionUOM = 'SU',
            $weightUOM = 'SI',
            $readyAtTimestamp = 238948923
        );

        $this->assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        $this->assertFalse($shipmentDetails->isRegularPickup());
        $this->assertTrue($shipmentDetails->isUnscheduledPickup());
        $this->assertEquals($termsOfTrade, $shipmentDetails->getTermsOfTrade());
        $this->assertEquals($contentType, $shipmentDetails->getContentType());
        $this->assertEquals($dimensionUOM, $shipmentDetails->getDimensionsUOM());
        $this->assertEquals($readyAtTimestamp, $shipmentDetails->getReadyAtTimestamp());
    }

    /**
     * @test
     */
    public function defineRegularPickupWithoutDocuments()
    {
        /** @var ShipmentDetailsInterface $shipmentDetails */
        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = false,
            $termsOfTrade = 'CFR',
            $contentType = ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS,
            $dimensionUOM = 'SU',
            $weightUOM = 'SI',
            $readyAtTimestamp = 238948923
        );

        $this->assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        $this->assertTrue($shipmentDetails->isRegularPickup());
        $this->assertFalse($shipmentDetails->isUnscheduledPickup());
        $this->assertEquals($termsOfTrade, $shipmentDetails->getTermsOfTrade());
        $this->assertEquals($contentType, $shipmentDetails->getContentType());
        $this->assertEquals($readyAtTimestamp, $shipmentDetails->getReadyAtTimestamp());
    }
}
