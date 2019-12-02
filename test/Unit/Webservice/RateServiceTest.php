<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\RateService;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class RateServiceTest extends TestCase
{
    /**
     * @test
     * @throws SoapException
     * @throws RateRequestException
     */
    public function shipmentServiceReturnsResponseFromAdapter()
    {
        $response = $this->getMockBuilder(RateResponseInterface::class)->getMock();

        /** @var LoggerInterface $logger */
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        /** @var RateServiceAdapter|MockObject|\PHPUnit_Framework_MockObject_MockObject $adapter */
        $adapter = $this->getMockBuilder(RateServiceAdapter::class)
            ->disableOriginalConstructor()
            ->getMock();
        $adapter
            ->method('collectRates')
            ->willReturn($response);

        /** @var RateServiceInterface $rateService */
        $rateService = new RateService($adapter, $logger);
        self::assertInstanceOf(RateServiceInterface::class, $rateService);

        /** @var RateRequestInterface $request */
        $request = $this->getMockBuilder(RateRequestInterface::class)->getMock();

        $response = $rateService->collectRates($request);
        self::assertInstanceOf(RateResponseInterface::class, $response);
    }
}
