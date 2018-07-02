<?php
namespace Dhl\Express\Test\Unit\Webservice\Soap\Response;

use Dhl\Express\Test\Unit\Webservice\Soap\TestSoapClient;
use Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * Tests RateRequest
 */
class RateRequestResponseTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Loads the response example from file and return the XML content.
     * 
     * @param string $xmlFileFile File name to load
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
            ['RateRequest-001'],
            ['RateRequest-002'],
            ['RateRequest-003'],
        ];
    }

    /**
     * Tests the class mapping of the mandatory response values of the rateRequest response.
     *
     * @param string $responseXml Response XML loaded from test file
     *
     * @throws \ReflectionException
     * @dataProvider rateResponseProvider
     */
    public function testRateRequestResponseClassMapping($responseXml)
    {
         $soapClientMock = $this->getMockFromWsdl(
            __DIR__ . '/../Wsdl/expressRateBook.wsdl',
            TestSoapClient::class,
            '',
            [
                '__doRequest',
            ]
        );

        $soapClientMock->expects(self::any())
            ->method('__doRequest')
            ->will(self::returnValue($this->loadResponseXml($responseXml)));

        /** @var RateResponse $response */
        $response = $soapClientMock->__soapCall('getRateRequest', []);

        // Test mandatory types
        $this->assertInternalType('array', $response->getProvider());

        foreach ($response->getProvider() as $provider) {
            $this->assertInstanceOf(RateResponse\Provider::class, $provider);
            $this->assertInternalType('string', $provider->getCode());

            $this->assertInstanceOf(RateResponse\Notification::class, $provider->getNotification());
            $this->assertInternalType('string', $provider->getNotification()->getMessage());
            $this->assertInternalType('int', $provider->getNotification()->getCode());

            $this->assertInternalType('array', $provider->getService());

            foreach ($provider->getService() as $service) {
                $this->assertInstanceOf(RateResponse\Service::class, $service);
                $this->assertInternalType('string', $service->getType());
                $this->assertInstanceOf(RateResponse\TotalNet::class, $service->getTotalNet());
                $this->assertInternalType('string', $service->getTotalNet()->getCurrency());
                $this->assertInternalType('float', $service->getTotalNet()->getAmount());

                if ($service->getCharges()) {
                    $this->assertInstanceOf(RateResponse\Charges::class, $service->getCharges());
                    $this->assertInternalType('string', $service->getCharges()->getCurrency());

                    foreach ($service->getCharges()->getCharge() as $charge) {
                        $this->assertInstanceOf(RateResponse\Charge::class, $charge);
                        $this->assertInternalType('string', $charge->getChargeType());
                        $this->assertInternalType('float', $charge->getChargeAmount());
                    }
                }
            }
        }
    }
}
