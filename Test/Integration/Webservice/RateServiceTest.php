<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\RequestBuilder\RateRequestBuilder;
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
     * @test
     * @dataProvider requestDataProvider
     *
     * @param bool $isUnscheduledPickup
     * @param string $accountNumber
     * @param string $sCountryCode
     * @param string $sPostalCode
     * @param string $sCity
     * @param string $rCountryCode
     * @param string $rPostalCode
     * @param string $rCity
     * @param array $rStreet
     * @param string $weightUOM
     * @param string $dimensionsUOM
     * @param string $termsOfTrade
     * @param string $contentType
     * @param int $readyAtTimestamp
     * @param array $packages
     * @param float $insuranceValue
     * @param string $insuranceCurrency

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
        string $weightUOM,
        string $dimensionsUOM,
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
            ->expects(self::exactly(2)) // request + response
            ->method('debug')
            ->with(self::isType('string'), self::isType('array')); // message + context array

        $serviceFactory = new SoapServiceFactory();
        $service = $serviceFactory->createRateService('api-user', 'api-pass', $logger);

        $requestBuilder = new RateRequestBuilder();
        $requestBuilder->setIsUnscheduledPickup($isUnscheduledPickup);
        $requestBuilder->setShipperAccountNumber($accountNumber);
        $requestBuilder->setShipperAddress($sCountryCode, $sPostalCode, $sCity);
        $requestBuilder->setRecipientAddress($rCountryCode, $rPostalCode, $rCity, $rStreet);
        $requestBuilder->setWeightUOM($weightUOM);
        $requestBuilder->setDimensionsUOM($dimensionsUOM);
        $requestBuilder->setTermsOfTrade($termsOfTrade);
        $requestBuilder->setContentType($contentType);
        $requestBuilder->setReadyAtTimestamp($readyAtTimestamp);
        foreach ($packages as $seq => $package) {
            $requestBuilder->addPackage(
                $seq,
                $package['weight'],
                $package['length'],
                $package['width'],
                $package['height']
            );
        }
        $requestBuilder->setInsurance($insuranceValue, $insuranceCurrency);

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
                [
                    1 => [ // package sequence number
                        1.2, // package weight
                        'kg', // package weight uom
                        20, // package length
                        15, // package width
                        10, // package height
                        'cm', // package dimensions uom
                    ],
                ]
            ],
        ];
    }
}
