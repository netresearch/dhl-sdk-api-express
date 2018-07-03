<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\RecipientAddress;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Model\Request\ShipperAddress;
use Dhl\Express\Model\Request\SpecialService;

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
            $length = 1.123,
            $width = 1.123,
            $height = 1.123
        );

        $requestBuilder->setInsurance(
            $insuranceValue = 99.99,
            $insuranceCurrency = 'EU'
        );

        $requestBuilder->setTermsOfTrade($termsOfTrade = 'CFR');
        $requestBuilder->setContentType(ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS);
        $requestBuilder->setDimensionsUOM('SU');
        $requestBuilder->setWeightUOM('SI');
        $requestBuilder->setReadyAtTimestamp(238948923);

        $request = $requestBuilder->build();

        $this->assertInstanceOf(RateRequest::class, $request);

        $this->assertEquals(
            new ShipmentDetails(
                $unscheduledPickup,
                $termsOfTrade = 'CFR',
                $contentType = ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS,
                $dimensionUOM = 'SU',
                $weightUOM = 'SI',
                $readyAtTimestamp = 238948923
            ),
            $request->getShipmentDetails()
        );

        $this->assertEquals(
            [
                new SpecialService(
                    'IN',
                    $value = 99.99,
                    $currencyCode = 'EU'
                )
            ],
            $request->getSpecialServices()
        );

        $this->assertEquals(
            [new Package(
                $sequenceNumber = 1,
                $weight = 1.123,
                $length = 1.123,
                $width = 1.123,
                $height = 1.123
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
