<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Unit\RequestBuilder;

use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Model\Request\Insurance;
use Dhl\Express\Model\Request\Shipment\DangerousGoods\DryIce;
use Dhl\Express\Model\Request\Package;
use Dhl\Express\Model\Request\Recipient;
use Dhl\Express\Model\Request\Shipment\ShipmentDetails;
use Dhl\Express\Model\Request\Shipment\Shipper;
use Dhl\Express\RequestBuilder\ShipmentRequestBuilder;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentRequestBuilderTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     */
    public function testShipmentRequest()
    {
        $readyAtTimestamp = new \DateTime('2019-10-10');
        $requestBuilder = new ShipmentRequestBuilder();
        $requestBuilder->setIsUnscheduledPickup($unscheduledPickup = true)
            ->setTermsOfTrade($termsOfTrade = ShipmentDetails::PAYMENT_TYPE_CFR)
            ->setContentType($contentType = ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS)
            ->setReadyAtTimestamp($readyAtTimestamp)
            ->setNumberOfPieces($numberOfPieces = 12)
            ->setCurrency($currencyCode = 'EUR')
            ->setDescription($description = 'a description.')
            ->setCustomsValue($customsValue = 1.0)
            ->setServiceType($serviceType = 'U')
            ->setPayerAccountNumber($accountNumber = 'XXXXXXX')
            ->setInsurance($insuranceValue = 99.99, $insuranceCurrency = 'EUR')
            ->setShipper(
                $countryCode = 'DE',
                $postalCode = '12345',
                $city = 'Berlin',
                $streetLines = [
                    'Sample street 5a',
                    'Sample street 5b',
                ],
                $name = 'Max Mustermann',
                $company = 'Acme',
                $phone = '004922832432423',
                $email = 'shipper@example.com'
            )
            ->setRecipient(
                $countryCode,
                $postalCode,
                $city,
                $streetLines,
                $name,
                $company,
                $phone,
                $email
            )
            ->setDryIce($unCode = 'UN1845', $weight = 20.53);

        $requestBuilder->addPackage(
            1,
            1.123,
            'kg',
            1.123,
            1.123,
            1.123,
            'Cm',
            'Customer References'
        )->addPackage(
            1,
            1.123,
            'Lb',
            1.123,
            1.123,
            1.123,
            'in',
            'Customer References'
        )->addPackage(
            1,
            1000,
            'g',
            10,
            10,
            10,
            'Mm',
            'Customer References'
        )->addPackage(
            1,
            16,
            'oz',
            0.01,
            0.01,
            0.01,
            'm',
            'Customer References'
        )->addPackage(
            1,
            1,
            'Lb',
            1,
            1,
            1,
            'Ft',
            'Customer References'
        )->addPackage(
            1,
            1,
            'Lb',
            1,
            1,
            1,
            'yd',
            'Customer References'
        );

        $request = $requestBuilder->build();

        self::assertInstanceOf(ShipmentRequestInterface::class, $request);

        self::assertEquals(
            new ShipmentDetails(
                $unscheduledPickup,
                $termsOfTrade,
                $contentType,
                $readyAtTimestamp,
                $numberOfPieces,
                $currencyCode,
                $description,
                $customsValue,
                $serviceType
            ),
            $request->getShipmentDetails()
        );

        self::assertEquals($accountNumber, $request->getPayerAccountNumber());

        self::assertEquals(new Insurance(
            $insuranceValue,
            $insuranceCurrency
        ), $request->getInsurance());

        self::assertEquals(new Shipper(
            $countryCode,
            $postalCode,
            $city,
            $streetLines,
            $name,
            $company,
            $phone,
            $email
        ), $request->getShipper());

        self::assertEquals(new Recipient(
            $countryCode,
            $postalCode,
            $city,
            $streetLines,
            $name,
            $company,
            $phone,
            $email
        ), $request->getRecipient());

        self::assertEquals(new DryIce(
            $unCode,
            $weight
        ), $request->getDryIce());

        self::assertEquals([
            new Package(
                1,
                1.123,
                Package::UOM_WEIGHT_KG,
                1.123,
                1.123,
                1.123,
                Package::UOM_DIMENSION_CM,
                'Customer References'
            ),
            new Package(
                1,
                1.123,
                Package::UOM_WEIGHT_LB,
                1.123,
                1.123,
                1.123,
                Package::UOM_DIMENSION_IN,
                'Customer References'
            ),
            new Package(
                1,
                1,
                Package::UOM_WEIGHT_KG,
                1,
                1,
                1,
                Package::UOM_DIMENSION_CM,
                'Customer References'
            ),
            new Package(
                1,
                1,
                Package::UOM_WEIGHT_LB,
                1,
                1,
                1,
                Package::UOM_DIMENSION_CM,
                'Customer References'
            ),
            new Package(
                1,
                1,
                Package::UOM_WEIGHT_LB,
                12,
                12,
                12,
                Package::UOM_DIMENSION_IN,
                'Customer References'
            ),
            new Package(
                1,
                1,
                Package::UOM_WEIGHT_LB,
                36,
                36,
                36,
                Package::UOM_DIMENSION_IN,
                'Customer References'
            ),
        ], $request->getPackages());
    }
}
