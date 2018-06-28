<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Model\RateRequest;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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

        $shipmentDetails = new ShipmentDetails($unscheduledPickup = true);

        $package = new Package(
            $sequenceNumber = 1,
            $weight         = 1.123,
            $weightUOM      = 'cm',
            $length         = 1.123,
            $width          = 1.123,
            $height         = 1.123,
            $dimensionUOM   = 'cm',
            $readyAtDate    = '2010-02-05T14:00:00 GMT+01:00',
            $contentType    = 'NON_DOCUMENTS',
            $termsOfTrade   = 'CFR'
        );

        $packages = [$package, $package];

        $insurance = new InsuranceService(
            $monetaryValue = 15,
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

        $this->assertInstanceOf(RateRequestInterface::class, $rateRequest);
        $this->assertEquals($shipperAddress, $rateRequest->getShipperAddress());
        $this->assertEquals($shipperAccountNumber, $rateRequest->getShipperAccountNumber());
        $this->assertEquals($recipientAddress, $rateRequest->getRecipientAddress());
        $this->assertEquals($shipmentDetails, $rateRequest->getShipmentDetails());
        $this->assertEquals($packages, $rateRequest->getPackages());
        $this->assertEquals($insurance, $rateRequest->getInsuranceService());
    }
}
