<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\ShipmentRequestInterface;
use Dhl\Express\Api\Data\ShipmentResponseInterface;
use Dhl\Express\Api\ShipmentServiceInterface;
use Dhl\Express\Webservice\Adapter\ShipmentServiceAdapterInterface;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shipmentServiceReturnsResponseFromAdapter()
    {
        $response = $this->getMockBuilder(ShipmentResponseInterface::class)->getMock();

        /** @var MockObject|ShipmentServiceAdapterInterface $adapter */
        $adapter = $this->getMockBuilder(ShipmentServiceAdapterInterface::class)->getMock();
        $adapter
            ->method('createShipment')
            ->willReturn($response);

        /** @var ShipmentServiceInterface $shipmentService */
        $shipmentService = new ShipmentService($adapter);
        $this->assertInstanceOf(ShipmentServiceInterface::class, $shipmentService);

        /** @var ShipmentRequestInterface $request */
        $request = $this->getMockBuilder(ShipmentRequestInterface::class)->getMock();

        $response = $shipmentService->createShipment($request);
        $this->assertInstanceOf(ShipmentResponseInterface::class, $response);
    }

    /**
     * @test
     */
    public function shipmentServiceLogsResponseFromAdapter()
    {

    }
}
