<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice;

use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Exception\ShipmentRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\ShipmentService;
use Dhl\Express\Webservice\Soap\ShipmentServiceAdapter;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Log\LoggerInterface;

/**
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class LogTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @throws SoapException
     * @throws ShipmentRequestException
     */
    public function shipmentServiceLogsResponseFromAdapter()
    {
        $lastRequest = 'foo';
        $lastResponse = 'bar';
        $response = $this->getMockBuilder(ShipmentResponseInterface::class)->getMock();

        /** @var ShipmentServiceAdapter|MockObject|\PHPUnit_Framework_MockObject_MockObject $adapter */
        $adapter = $this->getMockBuilder(ShipmentServiceAdapter::class)
            ->disableOriginalConstructor()
            ->getMock();
        $adapter
            ->method('getLastRequest')
            ->willReturn($lastRequest);
        $adapter
            ->method('getLastResponse')
            ->willReturn($lastResponse);
        $adapter
            ->method('createShipment')
            ->willReturn($response);

        /** @var LoggerInterface|MockObject|\PHPUnit_Framework_MockObject_MockObject $logger */
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        /** @var ShipmentServiceInterface $shipmentService */
        $shipmentService = new ShipmentService($adapter, $logger);

        /** @var ShipmentRequestInterface $request */
        $request = $this->getMockBuilder(ShipmentRequestInterface::class)->getMock();

        $logger
            ->expects(self::exactly(2))
            ->method('debug')
            ->withConsecutive(
                [self::equalTo('SOAP REQUEST' . PHP_EOL . $lastRequest), self::equalTo([])],
                [self::equalTo('SOAP RESPONSE' . PHP_EOL . $lastResponse), self::equalTo([])]
            );

        $shipmentService->createShipment($request);
    }
}
