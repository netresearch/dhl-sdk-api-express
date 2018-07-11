<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Webservice\Adapter\RateServiceAdapterInterface;
use Dhl\Express\Webservice\RateService;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class RateServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shipmentServiceReturnsResponseFromAdapter()
    {
        $response = $this->getMockBuilder(RateResponseInterface::class)->getMock();

        /** @var \Psr\Log\LoggerInterface $logger */
        $logger = $this->getMockBuilder(\Psr\Log\LoggerInterface::class)->getMock();

        /** @var MockObject|RateServiceAdapterInterface $adapter */
        $adapter = $this->getMockBuilder(RateServiceAdapterInterface::class)->getMock();
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
