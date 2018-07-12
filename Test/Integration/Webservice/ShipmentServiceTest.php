<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Test\Integration\Webservice;

use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\RequestBuilder\ShipmentRequestBuilder;
use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Mock\SoapServiceFactoryFake;
use Dhl\Express\Webservice\SoapServiceFactory;
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
     * @return ShipmentServiceInterface
     * @throws \ReflectionException
     */
    private function getShipmentService(LoggerInterface $logger): ShipmentServiceInterface
    {
        /** @var \SoapClient|MockObject $soapClient */
        $soapClient = $this->getMockFromWsdl('', SoapClientFake::class);

        $serviceFactory = new SoapServiceFactoryFake($soapClient);
        $service = $serviceFactory->createShipmentService('api-user', 'api-pass', $logger);

        return $service;
    }

    /**
     * @test
     * @dataProvider requestDataProvider
     *
     * @param bool $isUnscheduledPickup
     * @param string $termsOfTrade
     * @param string $contentType
     * @param int $readyAtTimestamp
     * @param int $numberOfPieces
     * @param string $currency
     * @param string $description
     * @param $serviceType
     * @param string $accountNumber
     * @param float $insuranceValue
     * @param string $insuranceCurrency
     * @param string $sCountryCode
     * @param string $sPostalCode
     * @param string $sCity
     * @param array $sStreet
     * @param string $sName
     * @param string $sCompany
     * @param string $sPhone
     * @param string $rCountryCode
     * @param string $rPostalCode
     * @param string $rCity
     * @param array $rStreet
     * @param string $rName
     * @param string $rCompany
     * @param string $rPhone
     * @param string $iceUnCode
     * @param float $iceWeight
     * @param array $packages
     * @throws \ReflectionException
     */
    public function createShipment(
        bool $isUnscheduledPickup,
        string $termsOfTrade,
        string $contentType,
        int $readyAtTimestamp,
        int $numberOfPieces,
        string $currency,
        string $description,
        $serviceType,
        string $accountNumber,
        float $insuranceValue,
        string $insuranceCurrency,
        string $sCountryCode,
        string $sPostalCode,
        string $sCity,
        array $sStreet,
        string $sName,
        string $sCompany,
        string $sPhone,
        string $rCountryCode,
        string $rPostalCode,
        string $rCity,
        array $rStreet,
        string $rName,
        string $rCompany,
        string $rPhone,
        string $iceUnCode,
        float $iceWeight,
        array $packages
    ) {
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
                ShipmentDetails::PAYMENT_TYPE_DDP, // terms of trade
                ShipmentDetails::CONTENT_TYPE_NON_DOCUMENTS, // content type
                (new \DateTime())->modify('+1 hour')->getTimestamp(), // ready at timestamp (shipment timestamp)
                '1', // number of pieces
                'EUR', // currency
                'ppps sd', // description
                'U', // service type
                '1234-5678', // account number
                99.99, // insurance value
                'EUR', // insurance currency type
                'CZ', // shipper country code
                '14800', // shipper postal code
                'Prague', // shipper city
                ['V Parku 2308/10'], // shipper street
                'John Smith', // shipper name
                'DHL', // shipper company
                '003932423423', // shipper phone
                'IT', // recipient country code
                '50127', // recipient postal code
                'Firenze', // recipient city
                ['Via Felice Matteucci 2'], // recipient street
                'Jane Smith', // recipient name
                'Deutsche Post DHL', // recipient company
                '004922832432423', // recipient phone
                'UN1845', // dry ice UN code
                20.35, // dry ice weight
                [
                    1 => [ // package sequence number
                        'weight' => 9.0, // package weight
                        'weightUOM' => 'kg', // weight unit
                        'length' => 46, // package length
                        'width' => 34, // package width
                        'height' => 31, // package height
                        'dimensionsUOM' => 'cm', // dimensions unit
                        'customerReferences' => 'TEST CZ-IT' // customer reference
                    ]
                ]
            ],
        ];
    }
}
