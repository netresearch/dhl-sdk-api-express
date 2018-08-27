<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Test\Integration\Webservice;

use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\RequestBuilder\TrackingRequestBuilder;
use Dhl\Express\Webservice\SoapServiceFactory;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Log\LoggerInterface;

/**
 * @package  Dhl\Express\Test\Integration
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param LoggerInterface $logger
     * @return \Dhl\Express\Api\TrackingServiceInterface
     * @throws \ReflectionException
     */
    private function getTrackingRequest(LoggerInterface $logger)
    {
        /** @var \SoapClient|MockObject $soapClient */
        //$soapClient = $this->getMockFromWsdl('', SoapClientFake::class);
        //$serviceFactory = new SoapServiceFactoryFake($soapClient);

        $serviceFactory = new SoapServiceFactory();
        return $serviceFactory->createTrackingService('user', 'password', $logger);
    }

    /**
     * @test
     * @dataProvider requestDataProvider
     *
     * @param int    $messageTime
     * @param string $messageReference
     * @param int[]  $awbNumbers
     * @param string $piecesEnabled
     *
     * @param string $levelOfDetails
     */
    public function trackShipment(
        int $messageTime,
        string $messageReference,
        array $awbNumbers,
        string $piecesEnabled,
        string $levelOfDetails
    ) {
        /** @var LoggerInterface|MockObject $logger */
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
