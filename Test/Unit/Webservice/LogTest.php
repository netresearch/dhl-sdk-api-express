<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice;

use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Webservice\Adapter\ShipmentServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\ShipmentService;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class LogTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shipmentServiceLogsResponseFromAdapter()
    {
        $lastRequest = 'foo';
        $lastResponse = 'bar';
        $response = $this->getMockBuilder(ShipmentResponseInterface::class)->getMock();

        /** @var MockObject|ShipmentServiceAdapterInterface $adapter */
        $adapter = $this->getMockBuilder([
            ShipmentServiceAdapterInterface::class,
            TraceableInterface::class
        ])->getMock();
        $adapter
            ->method('getLastRequest')
            ->willReturn($lastRequest);
        $adapter
            ->method('getLastResponse')
            ->willReturn($lastResponse);
        $adapter
            ->method('createShipment')
            ->willReturn($response);

        /** @var \Psr\Log\LoggerInterface|\PHPUnit\Framework\MockObject\MockObject $logger */
        $logger = $this->getMockBuilder(\Psr\Log\LoggerInterface::class)->getMock();

        /** @var ShipmentServiceInterface $shipmentService */
        $shipmentService = new ShipmentService($adapter, $logger);

        /** @var ShipmentRequestInterface $request */
        $request = $this->getMockBuilder(ShipmentRequestInterface::class)->getMock();

        $logger
            ->expects(self::exactly(2))
            ->method('debug')
            ->withConsecutive(
                [self::equalTo($lastRequest), self::equalTo([])],
                [self::equalTo($lastResponse), self::equalTo([])]
            );

        $shipmentService->createShipment($request);
    }
}
