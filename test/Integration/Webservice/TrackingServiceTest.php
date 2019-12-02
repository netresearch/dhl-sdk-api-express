<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Test\Integration\Webservice;

use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Api\TrackingServiceInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Exception\TrackingRequestException;
use Dhl\Express\RequestBuilder\TrackingRequestBuilder;
use Dhl\Express\Test\Integration\Mock\SoapClientTrackingFake;
use Dhl\Express\Test\Integration\Mock\SoapServiceFactoryFake;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Log\LoggerInterface;

/**
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param LoggerInterface $logger
     *
     * @return TrackingServiceInterface
     * @throws \SoapFault
     */
    private function getTrackingRequest(LoggerInterface $logger)
    {
        $serviceFactory = new SoapServiceFactoryFake(new SoapClientTrackingFake());
        return $serviceFactory->createTrackingService('api-user', 'api-pass', $logger);
    }

    /**
     * @test
     * @dataProvider requestDataProvider
     *
     * @param int $messageTime
     * @param string $messageReference
     * @param int[] $awbNumbers
     * @param string $piecesEnabled
     *
     * @param string $levelOfDetails
     *
     * @throws TrackingRequestException
     * @throws SoapException
     * @throws \SoapFault
     */
    public function trackShipment(
        $messageTime,
        $messageReference,
        array $awbNumbers,
        $piecesEnabled,
        $levelOfDetails
    ) {
        self::markTestIncomplete(
            'This test should not really test the SOAP web service, instead it should test the mapping '
            . 'from API classes to SOAP classes and visa versa. Fix it or remove it.'
        );

        /** @var LoggerInterface|MockObject|\PHPUnit_Framework_MockObject_MockObject $logger */
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();
        $logger
            ->expects(self::exactly(2))// request + response
            ->method('debug')
            ->with(self::isType('string'), self::isType('array')); // message + context array

        $service = $this->getTrackingRequest($logger);

        $requestBuilder = new TrackingRequestBuilder();
        $requestBuilder->setMessage($messageTime, $messageReference)
            ->setAwbNumbers($awbNumbers)
            ->setLevelOfDetails($levelOfDetails)
            ->setPiecesEnabled($piecesEnabled);

        $request = $requestBuilder->build();
        $response = $service->getTrackingInformation($request);

        self::assertInstanceOf(TrackingResponseInterface::class, $response);
    }

    public function requestDataProvider()
    {
        return [
            'domestic request with metric measures, unscheduled pickup' => [
                (new \DateTime('2018-08-08T11:17:08'))->getTimestamp(), // message time
                '31661280881c17088340d67730e24f83', // message reference
                ['6424045110'], // awb numbers
                'B', // pieces enabled
                'ALL_CHECK_POINTS', // level of details
            ],
        ];
    }
}
