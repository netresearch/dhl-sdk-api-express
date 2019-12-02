<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\ShipmentDetailsInterface;
use Dhl\Express\Model\Request\Shipment\ShipmentDetails;
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
            $numberOfPieces = 12,
            $currencyCode = 'EUR',
            $description = 'A description',
            $customsValue = 1.0,
            $serviceType = 'U'
        );

        self::assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        self::assertFalse($shipmentDetails->isRegularPickup());
        self::assertTrue($shipmentDetails->isUnscheduledPickup());
        self::assertSame($termsOfTrade, $shipmentDetails->getTermsOfTrade());
        self::assertSame($contentType, $shipmentDetails->getContentType());
        self::assertSame($readyAtTimestamp, $shipmentDetails->getReadyAtTimestamp());
        self::assertSame($numberOfPieces, $shipmentDetails->getNumberOfPieces());
        self::assertSame($currencyCode, $shipmentDetails->getCurrencyCode());
        self::assertSame($description, $shipmentDetails->getDescription());
        self::assertSame($customsValue, $shipmentDetails->getCustomsValue());
        self::assertSame($serviceType, $shipmentDetails->getServiceType());
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
            12,
            'EUR',
            'a description',
            $customsValue = 1,
            'U'
        );

        self::assertInstanceOf(ShipmentDetailsInterface::class, $shipmentDetails);
        self::assertTrue($shipmentDetails->isRegularPickup());
        self::assertFalse($shipmentDetails->isUnscheduledPickup());
        self::assertSame($termsOfTrade, $shipmentDetails->getTermsOfTrade());
        self::assertSame($contentType, $shipmentDetails->getContentType());
        self::assertSame($readyAtTimestamp, $shipmentDetails->getReadyAtTimestamp());
    }
}
