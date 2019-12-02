<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Rate\Package;
use Dhl\Express\Model\Request\Rate\RecipientAddress;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\Model\Request\Rate\ShipperAddress;
use PHPUnit\Framework\TestCase;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateRequestTest extends TestCase
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

        $shipperAccountNumber = 'XXXXXXXXX';

        $recipientAddress = new RecipientAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin',
            $streetLines = ['Sample street 5a', 'Sample street 5b']
        );

        $shipmentDetails = new ShipmentDetails(
            $unscheduledPickup = true,
            $termsOfTrade = ShipmentDetails::PAYMENT_TYPE_CFR,
            $contentType = ShipmentDetails::CONTENT_TYPE_DOCUMENTS,
            $readyAtDate = 238948923,
            false,
            false
        );

        $package = new Package(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM = 'KG',
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = 'CM'
        );

        $packages = [$package, $package];

        $insurance = new Insurance(
            $value = 99.99,
            $currencyCode = 'EUR'
        );

        $rateRequest = new RateRequest(
            $shipperAddress,
            $shipperAccountNumber,
            $recipientAddress,
            $shipmentDetails,
            $packages,
            $insurance
        );

        self::assertInstanceOf(RateRequestInterface::class, $rateRequest);
        self::assertSame($shipperAddress, $rateRequest->getShipperAddress());
        self::assertSame($shipperAccountNumber, $rateRequest->getShipperAccountNumber());
        self::assertSame($recipientAddress, $rateRequest->getRecipientAddress());
        self::assertSame($shipmentDetails, $rateRequest->getShipmentDetails());
        self::assertSame($packages, $rateRequest->getPackages());
        self::assertSame($insurance, $rateRequest->getInsurance());
    }
}
