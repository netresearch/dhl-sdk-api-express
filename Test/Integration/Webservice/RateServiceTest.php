<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Test\Integration\Webservice;

use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Model\Request\Rate\ShipmentDetails;
use Dhl\Express\RequestBuilder\RateRequestBuilder;
use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Mock\SoapServiceFactoryFake;
use Dhl\Express\Webservice\SoapServiceFactory;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Log\LoggerInterface;

/**
 * @package  Dhl\Express\Test\Integration
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param LoggerInterface $logger
     *
     * @return \Dhl\Express\Api\RateServiceInterface
     */
    private function getRateService(LoggerInterface $logger)
    {
        /** @var \SoapClient|MockObject $soapClient */
        $soapClient = $this->getMockFromWsdl('', SoapClientFake::class);

        $serviceFactory = new SoapServiceFactoryFake($soapClient);
        return $serviceFactory->createRateService('api-user', 'api-pass', $logger);
    }

    /**
     * @test
     * @dataProvider requestDataProvider
     *
     * @param bool   $isUnscheduledPickup
     * @param string $accountNumber
     * @param string $sCountryCode
     * @param string $sPostalCode
     * @param string $sCity
     * @param string $rCountryCode
     * @param string $rPostalCode
     * @param string $rCity
     * @param array  $rStreet
     * @param string $termsOfTrade
     * @param string $contentType
     * @param int    $readyAtTimestamp
     * @param array  $packages
     * @param float  $insuranceValue
     * @param string $insuranceCurrency
     *
     * @throws \Dhl\Express\Exception\RateRequestException
     * @throws \Dhl\Express\Exception\SoapException
     */
    public function collectRates(
        bool $isUnscheduledPickup,
        string $accountNumber,
        string $sCountryCode,
        string $sPostalCode,
        string $sCity,
        string $rCountryCode,
        string $rPostalCode,
        string $rCity,
        array $rStreet,
        string $termsOfTrade,
        string $contentType,
        int $readyAtTimestamp,
        array $packages,
        float $insuranceValue,
        string $insuranceCurrency
    ) {

        /** @var LoggerInterface|MockObject $logger */
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();
        $logger
            ->expects(self::exactly(2))// request + response
            ->method('debug')
            ->with(self::isType('string'), self::isType('array')); // message + context array

        $service = $this->getRateService($logger);

        $requestBuilder = new RateRequestBuilder();
        $requestBuilder->setIsUnscheduledPickup($isUnscheduledPickup)
            ->setShipperAccountNumber($accountNumber)
            ->setShipperAddress($sCountryCode, $sPostalCode, $sCity)
            ->setRecipientAddress($rCountryCode, $rPostalCode, $rCity, $rStreet)
            ->setTermsOfTrade($termsOfTrade)
            ->setContentType($contentType)
            ->setReadyAtTimestamp($readyAtTimestamp)
            ->setInsurance($insuranceValue, $insuranceCurrency);

        foreach ($packages as $seq => $package) {
            $requestBuilder->addPackage(
                $seq,
                $package['weight'],
                $package['weightUOM'],
                $package['length'],
                $package['width'],
                $package['height'],
                $package['dimensionsUOM']
            );
        }

        $request = $requestBuilder->build();
        $response = $service->collectRates($request);

        self::assertInstanceOf(RateResponseInterface::class, $response);
    }

    public function requestDataProvider()
    {
        return [
            'domestic request with metric measures, unscheduled pickup' => [
                true, // pickup type
                '1234-5678', // account number
                'US', // shipper country code
                '90232', // shipper postal code
                'Culver City', // shipper city
                'US', // recipient country code,
                '89109', // recipient postal code
                'Las Vegas', // recipient city
                ['3131 S Las Vegas Blvd', 'Room 404'], // recipient street
                ShipmentDetails::PAYMENT_TYPE_CFR, // terms of trade
                ShipmentDetails::CONTENT_TYPE_DOCUMENTS, // content type
                (new \DateTime())->modify('+1 day')->getTimestamp(), // ready at timestamp (shipment timestamp)
                [
                    1 => [ // package sequence number
                        'weight' => 1.2, // package weight
                        'weightUOM' => 'kg', // weight unit
                        'length' => 20, // package length
                        'width' => 15, // package width
                        'height' => 10, // package height
                        'dimensionsUOM' => 'cm' // dimensions unit
                    ],
                    2 => [ // package sequence number
                        'weight' => 1000, // package weight
                        'weightUOM' => 'g', // weight unit
                        'length' => 0.2, // package length
                        'width' => 0.1, // package width
                        'height' => 0.1, // package height
                        'dimensionsUOM' => 'm' // dimensions unit
                    ],
                ],
                99.99, // insurance value
                'EUR' // insurance currency type
            ],
        ];
    }
}
