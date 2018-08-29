<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Webservice\Soap\Response;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\Common\Notification;
use Dhl\Express\Webservice\Soap\Type\SoapRateResponse;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service\Charges;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service\Charges\Charge;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service\TotalNet;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Tests RateRequest
 */
class RateResponseTest extends \PHPUnit\Framework\TestCase
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
     * Data provider to return the available rateRequest response test cases.
     *
     * @return array
     */
    public function rateResponseProvider()
    {
        return [
            ['RateResponse-001'],
            ['RateResponse-002'],
            ['RateResponse-003'],
            ['RateResponse-004'],
        ];
    }

    /**
     * Tests the class mapping of the mandatory response values of the rateRequest response.
     *
     * @param string $responseXml Response XML loaded from test file
     *
     * @dataProvider rateResponseProvider
     */
    public function testRateResponseClassMapping($responseXml)
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

        /** @var SoapRateResponse $response */
        $response = $soapClientMock->__soapCall('getRateRequest', []);

        // Test mandatory types
        self::assertInternalType('array', $response->getProvider());

        foreach ($response->getProvider() as $provider) {
            self::assertInstanceOf(Provider::class, $provider);
            self::assertInternalType('string', $provider->getCode());

            self::assertInstanceOf(Notification::class, $provider->getNotification());
            self::assertInternalType('string', $provider->getNotification()->getMessage());
            self::assertInternalType('int', $provider->getNotification()->getCode());

            $services = $provider->getService();

            if ($services) {
                self::assertInternalType('array', $provider->getService());

                foreach ($provider->getService() as $service) {
                    self::assertInstanceOf(Service::class, $service);
                    self::assertInternalType('string', $service->getType());
                    self::assertInstanceOf(TotalNet::class, $service->getTotalNet());
                    self::assertInternalType('string', $service->getTotalNet()->getCurrency());
                    self::assertInternalType('float', $service->getTotalNet()->getAmount());

                    if ($service->getCharges()) {
                        self::assertInstanceOf(Charges::class, $service->getCharges());
                        self::assertInternalType('string', $service->getCharges()->getCurrency());

                        foreach ($service->getCharges()->getCharge() as $charge) {
                            self::assertInstanceOf(Charge::class, $charge);
                            self::assertInternalType('string', $charge->getChargeType());
                            self::assertInternalType('float', $charge->getChargeAmount());
                        }
                    }
                }
            }
        }
    }
}
