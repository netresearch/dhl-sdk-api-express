<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\InsuranceService;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\RecipientAddress;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Model\Request\ShipperAddress;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateRequestBuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function testRateRequest()
    {
        $requestBuilder = new RateRequestBuilder;
        $requestBuilder->setIsUnscheduledPickup($unscheduledPickup = true);
        $requestBuilder->setShipperAccountNumber($accountNumber = 'XXXXXXX');
        $requestBuilder->setShipperAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin'
        );
        $requestBuilder->setRecipientAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin',
            $streetLines = ['Sample street 5a', 'Sample street 5b']
        );
        $requestBuilder->addPackage(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM = 'cm',
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = 'cm',
            $readyAtTimestamp = 238948923,
            $contentType = 'NON_DOCUMENTS',
            $termsOfTrade = 'CFR'
        );

        $requestBuilder->setInsurance(
            $monetaryValue = 15,
            $currencyCode = 'EUR'
        );

        $request = $requestBuilder->build();

        $this->assertInstanceOf(RateRequest::class, $request);

        $this->assertEquals(
            new ShipmentDetails($unscheduledPickup),
            $request->getShipmentDetails()
        );

        $this->assertEquals(
            new InsuranceService(
                $monetaryValue = 15,
                $currencyCode = 'EUR'
            ),
            $request->getInsuranceService()
        );

        $this->assertEquals(
            [new Package(
                $sequenceNumber = 1,
                $weight = 1.123,
                $weightUOM = 'cm',
                $length = 1.123,
                $width = 1.123,
                $height = 1.123,
                $dimensionUOM = 'cm',
                $readyAtTimestamp = 238948923,
                $contentType = 'NON_DOCUMENTS',
                $termsOfTrade = 'CFR'
            )],
            $request->getPackages()
        );

        $this->assertEquals($accountNumber, $request->getShipperAccountNumber());

        $this->assertEquals(
            new ShipperAddress(
                $countryCode = 'DE',
                $postalCode  = '12345',
                $city        = 'Berlin'
            ),
            $request->getShipperAddress()
        );

        $this->assertEquals(
            new RecipientAddress(
                $countryCode = 'DE',
                $postalCode  = '12345',
                $city        = 'Berlin',
                $streetLines = ['Sample street 5a', 'Sample street 5b']
            ),
            $request->getRecipientAddress()
        );
    }
}
