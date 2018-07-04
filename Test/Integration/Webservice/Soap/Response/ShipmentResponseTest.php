<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Webservice\Soap\Response;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\Common\Notification;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\LabelImage;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults\PackageResult;

/**
 * Tests ShipmentRequest
 */
class ShipmentResponseTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Loads the response example from file and return the XML content.
     * 
     * @param string $xmlFile File name to load
     *
     * @return string
     */
    private function loadResponseXml(string $xmlFile): string
    {
        $fileName = realpath(__DIR__ . '/../Mock/Response/' . $xmlFile . '.xml');

        if (file_exists($fileName)) {
            return file_get_contents($fileName);
        }

        return '';
    }

    /**
     * Data provider to return the available shipmentRequest response test cases.
     *
     * @return array
     */
    public function shipmentResponseProvider(): array
    {
        return [
            ['ShipmentResponse-001'],
            ['ShipmentResponse-002'],
        ];
    }

    /**
     * Tests the class mapping of the mandatory response values of the shipmentRequest response.
     *
     * @param string $responseXml Response XML loaded from test file
     *
     * @throws \ReflectionException
     * @dataProvider shipmentResponseProvider
     */
    public function testShipmentResponseClassMapping(string $responseXml)
    {
         $soapClientMock = $this->getMockFromWsdl(
             WsdlProvider::getWsdlFile(),
            SoapClientFake::class,
            '',
            [
                '__doRequest',
            ]
        );

        $soapClientMock->expects(self::any())
            ->method('__doRequest')
            ->willReturn($this->loadResponseXml($responseXml));

        /** @var ShipmentResponse $response */
        $response = $soapClientMock->__soapCall('createShipmentRequest', []);

        $this->assertInternalType('array', $response->getNotification());

        foreach ($response->getNotification() as $notification) {
            $this->assertInstanceOf(Notification::class, $notification);
            $this->assertInternalType('string', $notification->getMessage());
            $this->assertInternalType('int', $notification->getCode());
        }

        if ($response->getPackagesResult()) {
            $this->assertInstanceOf(PackagesResults::class, $response->getPackagesResult());

            foreach ($response->getPackagesResult()->getPackageResult() as $packageResult) {
                $this->assertInstanceOf(PackageResult::class, $packageResult);
                $this->assertInternalType('string', $packageResult->getTrackingNumber());
                $this->assertInternalType('int', $packageResult->getNumber());
            }
        }

        if ($response->getLabelImage()) {
            $this->assertInternalType('array', $response->getLabelImage());

            foreach ($response->getLabelImage() as $labelImage) {
                $this->assertInstanceOf(LabelImage::class, $labelImage);
                $this->assertInternalType('string', $labelImage->getLabelImageFormat());
                $this->assertInternalType('string', $labelImage->getGraphicImage());
            }
        }

        if ($response->getShipmentIdentificationNumber()) {
            $this->assertInternalType('string', $response->getShipmentIdentificationNumber());
        }

        if ($response->getDispatchConfirmationNumber()) {
            $this->assertInternalType('string', $response->getDispatchConfirmationNumber());
        }
    }
}
