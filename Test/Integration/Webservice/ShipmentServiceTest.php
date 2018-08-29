<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Test\Integration\Webservice;

use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\RequestBuilder\ShipmentRequestBuilder;
use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Mock\SoapServiceFactoryFake;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Log\LoggerInterface;

/**
 * @package  Dhl\Express\Test\Integration
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param LoggerInterface $logger
     *
     * @return ShipmentServiceInterface
     */
    private function getShipmentService(LoggerInterface $logger)
    {
        $serviceFactory = new SoapServiceFactoryFake(new SoapClientFake());
        return $serviceFactory->createShipmentService('api-user', 'api-pass', $logger);
    }

    /**
     * @test
     * @dataProvider requestDataProvider
     *
     * @param bool   $isUnscheduledPickup
     * @param string $termsOfTrade
     * @param string $contentType
     * @param int    $readyAtTimestamp
     * @param int    $numberOfPieces
     * @param string $currency
     * @param string $description
     * @param float  $customsValue
     * @param string $serviceType
     * @param string $accountNumber
     * @param float  $insuranceValue
     * @param string $insuranceCurrency
     * @param string $sCountryCode
     * @param string $sPostalCode
     * @param string $sCity
     * @param array  $sStreet
     * @param string $sName
     * @param string $sCompany
     * @param string $sPhone
     * @param string $rCountryCode
     * @param string $rPostalCode
     * @param string $rCity
     * @param array  $rStreet
     * @param string $rName
     * @param string $rCompany
     * @param string $rPhone
     * @param string $iceUnCode
     * @param float  $iceWeight
     * @param array  $packages
     */
    public function createShipment(
        $isUnscheduledPickup,
        $termsOfTrade,
        $contentType,
        $readyAtTimestamp,
        $numberOfPieces,
        $currency,
        $description,
        $customsValue,
        $serviceType,
        $accountNumber,
        $insuranceValue,
        $insuranceCurrency,
        $sCountryCode,
        $sPostalCode,
        $sCity,
        array $sStreet,
        $sName,
        $sCompany,
        $sPhone,
        $rCountryCode,
        $rPostalCode,
        $rCity,
        array $rStreet,
        $rName,
        $rCompany,
        $rPhone,
        $iceUnCode,
        $iceWeight,
        array $packages
    ) {
        self::markTestIncomplete(
            'This test should not really test the SOAP web service, instead it should test the mapping '
            . 'from API classes to SOAP classes and visa versa. Fix it or remove it.'
        );


        /** @var LoggerInterface|MockObject $logger */
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();
        $logger
            ->expects(self::exactly(2))// request + response
            ->method('debug')
            ->with(self::isType('string'), self::isType('array')); // message + context array

        $service = $this->getShipmentService($logger);

        $requestBuilder = new ShipmentRequestBuilder();

        $requestBuilder->setIsUnscheduledPickup($isUnscheduledPickup)
            ->setTermsOfTrade($termsOfTrade)
            ->setContentType($contentType)
            ->setReadyAtTimestamp($readyAtTimestamp)
            ->setNumberOfPieces($numberOfPieces)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setCustomsValue($customsValue)
            ->setServiceType($serviceType)
            ->setPayerAccountNumber($accountNumber)
            ->setInsurance($insuranceValue, $insuranceCurrency)
            ->setShipper(
                $sCountryCode,
                $sPostalCode,
                $sCity,
                $sStreet,
                $sName,
                $sCompany,
                $sPhone
            )
            ->setRecipient(
                $rCountryCode,
                $rPostalCode,
                $rCity,
                $rStreet,
                $rName,
                $rCompany,
                $rPhone
            )
            ->setDryIce($iceUnCode, $iceWeight);

        foreach ($packages as $seq => $package) {
            $requestBuilder->addPackage(
                $seq,
                $package['weight'],
                $package['weightUOM'],
                $package['length'],
                $package['width'],
                $package['height'],
                $package['dimensionsUOM'],
                $package['customerReferences']
            );
        }

        $request = $requestBuilder->build();
        $response = $service->createShipment($request);

        self::assertInstanceOf(ShipmentResponseInterface::class, $response);
    }

    public function requestDataProvider()
    {
        return [
            'domestic request with metric measures, unscheduled pickup' => [
                false, // pickup type
                ShipmentDetails::PAYMENT_TYPE_DAP, // terms of trade
                ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS, // content type
                (new \DateTime('2018-07-23T13:12:14GMT+02:00'))->getTimestamp(), // ready at timestamp (shipment timestamp)
                1, // number of pieces
                'EUR', // currency
                'Replacement Watch Band(s)', // description
                245, // customsValue
                'P', // service type
                '1234-5678', // account number
                99.99, // insurance value
                'EUR', // insurance currency type
                'DE', // shipper country code
                '10719', // shipper postal code
                'Berlin', // shipper city
                ['Ludwigkirchstr. 2'], // shipper street
                'Marchant Asterix', // shipper name
                'Marchant Asterix', // shipper company
                '+49 30 1231231234', // shipper phone
                'US', // recipient country code
                '37931', // recipient postal code
                'KNOXVILLE', // recipient city
                ['8820 Ball Camp Pike'], // recipient street
                'Michael Cullum', // recipient name
                'Michael Cullum', // recipient company
                '++76068111111', // recipient phone
                'UN1845', // dry ice UN code
                20.35, // dry ice weight
                [
                    1 => [ // package sequence number
                        'weight' => 0.5, // package weight
                        'weightUOM' => 'kg', // weight unit
                        'length' => 32, // package length
                        'width' => 24, // package width
                        'height' => 2.5, // package height
                        'dimensionsUOM' => 'cm', // dimensions unit
                        'customerReferences' => 'Order #5174' // customer reference
                    ]
                ]
            ],
        ];
    }
}
