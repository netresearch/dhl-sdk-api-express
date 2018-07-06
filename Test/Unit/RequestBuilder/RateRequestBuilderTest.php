<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\RequestBuilder;

use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\RecipientAddress;
use Dhl\Express\Model\Request\ShipmentDetails;
use Dhl\Express\Model\Request\ShipperAddress;
use Dhl\Express\RequestBuilder\RateRequestBuilder;

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
            $weightUOM = 'kg',
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = 'Cm'
        );
        $requestBuilder->addPackage(
            $sequenceNumber = 1,
            $weight = 1.123,
            $weightUOM = 'Lb',
            $length = 1.123,
            $width = 1.123,
            $height = 1.123,
            $dimensionUOM = 'in'
        );
        $requestBuilder->addPackage(
            $sequenceNumber = 1,
            $weight = 1000,
            $weightUOM = 'g',
            $length = 10,
            $width = 10,
            $height = 10,
            $dimensionUOM = 'Mm'
        );
        $requestBuilder->addPackage(
            $sequenceNumber = 1,
            $weight = 16,
            $weightUOM = 'oz',
            $length = 0.01,
            $width = 0.01,
            $height = 0.01,
            $dimensionUOM = 'm'
        );
        $requestBuilder->addPackage(
            $sequenceNumber = 1,
            $weight = 1,
            $weightUOM = 'Lb',
            $length = 1,
            $width = 1,
            $height = 1,
            $dimensionUOM = 'Ft'
        );
        $requestBuilder->addPackage(
            $sequenceNumber = 1,
            $weight = 1,
            $weightUOM = 'Lb',
            $length = 1,
            $width = 1,
            $height = 1,
            $dimensionUOM = 'yd'
        );

        $requestBuilder->setInsurance(
            $insuranceValue = 99.99,
            $insuranceCurrency = 'EU'
        );

        $requestBuilder->setTermsOfTrade($termsOfTrade = 'CFR');
        $requestBuilder->setContentType(ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS);
        $requestBuilder->setReadyAtTimestamp(238948923);

        $request = $requestBuilder->build();

        self::assertInstanceOf(RateRequest::class, $request);

        self::assertEquals(
            new ShipmentDetails(
                $unscheduledPickup,
                $termsOfTrade = 'CFR',
                $contentType = ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS,
                $readyAtTimestamp = 238948923
            ),
            $request->getShipmentDetails()
        );

        self::assertEquals(
            new Insurance(
                $value = 99.99,
                $currencyCode = 'EU'
            ),
            $request->getInsurance()
        );

        self::assertEquals(
            [
                new Package(
                    $sequenceNumber = 1,
                    $weight = 1.123,
                    $weightUOM = 'KG',
                    $length = 1.123,
                    $width = 1.123,
                    $height = 1.123,
                    $dimensionUOM = 'CM'
                ),
                new Package(
                    $sequenceNumber = 1,
                    $weight = 1.123,
                    $weightUOM = 'LB',
                    $length = 1.123,
                    $width = 1.123,
                    $height = 1.123,
                    $dimensionUOM = 'IN'
                ),
                new Package(
                    $sequenceNumber = 1,
                    $weight = 1,
                    $weightUOM = 'KG',
                    $length = 1,
                    $width = 1,
                    $height = 1,
                    $dimensionUOM = 'CM'
                ),
                new Package(
                    $sequenceNumber = 1,
                    $weight = 1,
                    $weightUOM = 'LB',
                    $length = 1,
                    $width = 1,
                    $height = 1,
                    $dimensionUOM = 'CM'
                ),
                new Package(
                    $sequenceNumber = 1,
                    $weight = 1,
                    $weightUOM = 'LB',
                    $length = 12,
                    $width = 12,
                    $height = 12,
                    $dimensionUOM = 'IN'
                ),
                new Package(
                    $sequenceNumber = 1,
                    $weight = 1,
                    $weightUOM = 'LB',
                    $length = 36,
                    $width = 36,
                    $height = 36,
                    $dimensionUOM = 'IN'
                )
            ],
            $request->getPackages()
        );

        self::assertEquals($accountNumber, $request->getShipperAccountNumber());

        self::assertEquals(
            new ShipperAddress(
                $countryCode = 'DE',
                $postalCode  = '12345',
                $city        = 'Berlin'
            ),
            $request->getShipperAddress()
        );

        self::assertEquals(
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
