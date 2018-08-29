<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Webservice\Soap\Response;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\Common\Notification;
use Dhl\Express\Webservice\Soap\Type\SoapShipmentResponse;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\LabelImage;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults;
use Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults\PackageResult;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Tests SoapShipmentRequest
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
    private function loadResponseXml($xmlFile)
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
    public function shipmentResponseProvider()
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
     * @dataProvider shipmentResponseProvider
     */
    public function testShipmentResponseClassMapping($responseXml)
    {
        /** @var SoapClientFake|MockObject $soapClientMock */
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

        /** @var SoapShipmentResponse $response */
        $response = $soapClientMock->__soapCall('createShipmentRequest', []);

        self::assertInternalType('array', $response->getNotification());

        foreach ($response->getNotification() as $notification) {
            self::assertInstanceOf(Notification::class, $notification);
            self::assertInternalType('string', $notification->getMessage());
            self::assertInternalType('int', $notification->getCode());
        }

        if ($response->getPackagesResult()) {
            self::assertInstanceOf(PackagesResults::class, $response->getPackagesResult());

            foreach ($response->getPackagesResult()->getPackageResult() as $packageResult) {
                self::assertInstanceOf(PackageResult::class, $packageResult);
                self::assertInternalType('string', $packageResult->getTrackingNumber());
                self::assertInternalType('int', $packageResult->getNumber());
            }
        }

        if ($response->getLabelImage()) {
            self::assertInternalType('array', $response->getLabelImage());

            foreach ($response->getLabelImage() as $labelImage) {
                self::assertInstanceOf(LabelImage::class, $labelImage);
                self::assertInternalType('string', $labelImage->getLabelImageFormat());
                self::assertInternalType('string', $labelImage->getGraphicImage());
            }
        }

        if ($response->getShipmentIdentificationNumber()) {
            self::assertInternalType('string', $response->getShipmentIdentificationNumber());
        }

        if ($response->getDispatchConfirmationNumber()) {
            self::assertInternalType('string', $response->getDispatchConfirmationNumber());
        }
    }
}
