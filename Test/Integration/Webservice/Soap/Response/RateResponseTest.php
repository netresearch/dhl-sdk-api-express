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
    private function loadResponseXml(string $xmlFile): string
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
    public function rateResponseProvider(): array
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
    public function testRateResponseClassMapping(string $responseXml)
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
        $this->assertInternalType('array', $response->getProvider());

        foreach ($response->getProvider() as $provider) {
            $this->assertInstanceOf(Provider::class, $provider);
            $this->assertInternalType('string', $provider->getCode());

            $this->assertInstanceOf(Notification::class, $provider->getNotification());
            $this->assertInternalType('string', $provider->getNotification()->getMessage());
            $this->assertInternalType('int', $provider->getNotification()->getCode());

            if ($provider->getService()) {
                $this->assertInternalType('array', $provider->getService());

                foreach ($provider->getService() as $service) {
                    $this->assertInstanceOf(Service::class, $service);
                    $this->assertInternalType('string', $service->getType());
                    $this->assertInstanceOf(TotalNet::class, $service->getTotalNet());
                    $this->assertInternalType('string', $service->getTotalNet()->getCurrency());
                    $this->assertInternalType('float', $service->getTotalNet()->getAmount());

                    if ($service->getCharges()) {
                        $this->assertInstanceOf(Charges::class, $service->getCharges());
                        $this->assertInternalType('string', $service->getCharges()->getCurrency());

                        foreach ($service->getCharges()->getCharge() as $charge) {
                            $this->assertInstanceOf(Charge::class, $charge);
                            $this->assertInternalType('string', $charge->getChargeType());
                            $this->assertInternalType('float', $charge->getChargeAmount());
                        }
                    }
                }
            }
        }
    }
}
