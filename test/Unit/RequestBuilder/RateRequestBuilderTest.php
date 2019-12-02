<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\RequestBuilder;

use Dhl\Express\Model\RateRequest;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Rate\Package;
use Dhl\Express\Model\Request\Rate\RecipientAddress;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\Model\Request\Rate\ShipperAddress;
use Dhl\Express\RequestBuilder\RateRequestBuilder;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateRequestBuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     */
    public function testRateRequest()
    {
        $requestBuilder = new RateRequestBuilder();
        $requestBuilder->setIsUnscheduledPickup(true)
            ->setShipperAccountNumber('XXXXXXX')
            ->setShipperAddress(
                'DE',
                '12345',
                'Berlin'
            )->setRecipientAddress(
                'DE',
                '12345',
                'Berlin',
                [
                    'Sample street 5a',
                    'Sample street 5b',
                 ]
            );

        $requestBuilder->addPackage(
            1,
            1.123,
            'kg',
            1.123,
            1.123,
            1.123,
            'Cm'
        )->addPackage(
            1,
            1.123,
            'Lb',
            1.123,
            1.123,
            1.123,
            'in'
        )->addPackage(
            1,
            1000,
            'g',
            10,
            10,
            10,
            'Mm'
        )->addPackage(
            1,
            16,
            'oz',
            0.01,
            0.01,
            0.01,
            'm'
        )->addPackage(
            1,
            1,
            'Lb',
            1,
            1,
            1,
            'Ft'
        )->addPackage(
            1,
            1,
            'Lb',
            1,
            1,
            1,
            'yd'
        );

        $requestBuilder->setInsurance(99.99, 'EUR')
            ->setTermsOfTrade(ShipmentDetails::PAYMENT_TYPE_CFR)
            ->setContentType(ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS)
            ->setReadyAtTimestamp(new \DateTime('2019-10-10'))
            ->setNextBusinessDayIndicator(true)
            ->setIsValueAddedServicesRequested(true);

        $request = $requestBuilder->build();

        self::assertInstanceOf(RateRequest::class, $request);

        self::assertEquals(
            new ShipmentDetails(
                true,
                ShipmentDetails::PAYMENT_TYPE_CFR,
                ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS,
                new \DateTime('2019-10-10'),
                true,
                true
            ),
            $request->getShipmentDetails()
        );

        self::assertEquals(
            new Insurance(
                99.99,
                'EUR'
            ),
            $request->getInsurance()
        );

        self::assertEquals(
            [
                new Package(
                    1,
                    1.123,
                    Package::UOM_WEIGHT_KG,
                    1.123,
                    1.123,
                    1.123,
                    Package::UOM_DIMENSION_CM
                ),
                new Package(
                    1,
                    1.123,
                    Package::UOM_WEIGHT_LB,
                    1.123,
                    1.123,
                    1.123,
                    Package::UOM_DIMENSION_IN
                ),
                new Package(
                    1,
                    1,
                    Package::UOM_WEIGHT_KG,
                    1,
                    1,
                    1,
                    Package::UOM_DIMENSION_CM
                ),
                new Package(
                    1,
                    1,
                    Package::UOM_WEIGHT_LB,
                    1,
                    1,
                    1,
                    Package::UOM_DIMENSION_CM
                ),
                new Package(
                    1,
                    1,
                    Package::UOM_WEIGHT_LB,
                    12,
                    12,
                    12,
                    Package::UOM_DIMENSION_IN
                ),
                new Package(
                    1,
                    1,
                    Package::UOM_WEIGHT_LB,
                    36,
                    36,
                    36,
                    Package::UOM_DIMENSION_IN
                ),
            ],
            $request->getPackages()
        );

        self::assertSame('XXXXXXX', $request->getShipperAccountNumber());

        self::assertEquals(
            new ShipperAddress(
                'DE',
                '12345',
                'Berlin'
            ),
            $request->getShipperAddress()
        );

        self::assertEquals(
            new RecipientAddress(
                'DE',
                '12345',
                'Berlin',
                [
                    'Sample street 5a',
                    'Sample street 5b',
                ]
            ),
            $request->getRecipientAddress()
        );
    }
}
