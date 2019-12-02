<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\ShipmentDetailsInterface;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use PHPUnit\Framework\TestCase;

/**
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class ShipmentDetailsTest extends TestCase
{
    /**
     * @test
     */
    public function defineUnscheduledPickupWithDocuments()
    {
        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = true,
            $termsOfTrade = ShipmentDetails::PAYMENT_TYPE_CFR,
            $contentType = ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $readyAtTimestamp = 238948923,
            false,
            false
        );

        self::assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        self::assertFalse($shipmentDetails->isRegularPickup());
        self::assertTrue($shipmentDetails->isUnscheduledPickup());
        self::assertSame($termsOfTrade, $shipmentDetails->getTermsOfTrade());
        self::assertSame($contentType, $shipmentDetails->getContentType());
        self::assertSame($readyAtTimestamp, $shipmentDetails->getReadyAtTimestamp());
    }

    /**
     * @test
     */
    public function defineRegularPickupWithoutDocuments()
    {
        /** @var ShipmentDetailsInterface $shipmentDetails */
        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = false,
            $termsOfTrade = ShipmentDetails::PAYMENT_TYPE_CFR,
            $contentType = ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS,
            $readyAtTimestamp = 238948923,
            false,
            false
        );

        self::assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        self::assertTrue($shipmentDetails->isRegularPickup());
        self::assertFalse($shipmentDetails->isUnscheduledPickup());
        self::assertSame($termsOfTrade, $shipmentDetails->getTermsOfTrade());
        self::assertSame($contentType, $shipmentDetails->getContentType());
        self::assertSame($readyAtTimestamp, $shipmentDetails->getReadyAtTimestamp());
    }
}
