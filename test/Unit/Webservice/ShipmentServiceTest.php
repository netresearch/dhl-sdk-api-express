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
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class ShipmentServiceTest extends TestCase
{
    /**
     * @test
     *
     * @throws ShipmentRequestException
     * @throws SoapException
     */
    public function shipmentServiceReturnsResponseFromAdapter()
    {
        $response = $this->getMockBuilder(ShipmentResponseInterface::class)->getMock();

        /** @var LoggerInterface $logger */
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        /** @var ShipmentServiceAdapter|MockObject|\PHPUnit_Framework_MockObject_MockObject $adapter */
        $adapter = $this->getMockBuilder(ShipmentServiceAdapter::class)
            ->disableOriginalConstructor()
            ->getMock();
        $adapter
            ->method('createShipment')
            ->willReturn($response);

        /** @var ShipmentServiceInterface $shipmentService */
        $shipmentService = new ShipmentService($adapter, $logger);
        self::assertInstanceOf(ShipmentServiceInterface::class, $shipmentService);

        /** @var ShipmentRequestInterface $request */
        $request = $this->getMockBuilder(ShipmentRequestInterface::class)->getMock();

        $response = $shipmentService->createShipment($request);
        self::assertInstanceOf(ShipmentResponseInterface::class, $response);
    }
}
