<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\Common\Billing;
use Dhl\Express\Webservice\Soap\Type\Common\Billing\ShippingPaymentType;
use Dhl\Express\Webservice\Soap\Type\Common\ClientDetail;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\Common\PaymentInfo;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\Service;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices\ServiceType;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Packages\RequestedPackages;
use Dhl\Express\Webservice\Soap\Type\RateRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Type\RateRequest\Ship;
use Dhl\Express\Webservice\Soap\Type\SoapRateRequest;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests RateRequest
 */
class RateRequestTest extends TestCase
{
    /**
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     */
    public function testRateRequestXmlMapping()
    {
        $shipperAddress = new Address('Ichikawa-shi, Chiba', '272-0138', 'JP');
        $shipperAddress->setStreetLines('1-16-24, Minami-gyotoku');

        $recipientAddress = new Address('QINGDAO SHI', '266033', 'CN');
        $recipientAddress->setStreetLines('63 RENMIN LU, QINGDAO SHI');

        $ship = new Ship($shipperAddress, $recipientAddress);

        $requestedPackages = [
            new RequestedPackages(2.5, new Dimensions(1, 2, 3), 1),
            new RequestedPackages(3.5, new Dimensions(4, 5, 6), 2),
        ];

        $shipTimestamp = (new \DateTime())
            ->setTime(10, 0)
            ->modify('+6 hours');

        $packages = new Packages($requestedPackages);

        $requestedShipment = new RequestedShipment(
            DropOffType::REQUEST_COURIER,
            $ship,
            $packages,
            $shipTimestamp,
            UnitOfMeasurement::SU
        );

        $specialServices = new SpecialServices([
            (new Service(ServiceType::TYPE_INSURANCE))
                ->setCurrencyCode('EUR')
                ->setServiceValue(24.5),
            new Service(ServiceType::TYPE_INSURANCE),
        ]);

        $requestedShipment->setNextBusinessDay(true)
            ->setContent(Content::NON_DOCUMENTS)
            ->setDeclaredValue((float) '200')
            ->setDeclaredValueCurrencyCode('USD')
            ->setPaymentInfo(PaymentInfo::DDP)
            ->setAccount('123456789')
            ->setBilling(new Billing('12345678', ShippingPaymentType::S))
            ->setSpecialServices($specialServices)
            ->setRequestValueAddedServices(true);

        $clientDetail = new ClientDetail();
        $clientDetail->setSso('SSO')
            ->setPlant('PLANT');

        $rateRequest = new SoapRateRequest($requestedShipment);
        $rateRequest->setClientDetail($clientDetail);

        /** @var SoapClientFake|MockObject|\PHPUnit_Framework_MockObject_MockObject $soapClientMock */
        $soapClientMock = $this->getMockFromWsdl(
            WsdlProvider::getWsdlFile(),
            SoapClientFake::class,
            '',
            [
                '__doRequest',
            ]
        );

        $soapClientMock->expects(self::once())
            ->method('__doRequest')
            ->with(
                self::anything(),
                self::anything(),
                'euExpressRateBook_providerServices_ShipmentHandlingServices_Binder_getRateRequest'
            )
            ->willReturn('');

        try {
            $soapClientMock->__soapCall(
                'getRateRequest',
                [
                    $rateRequest
                ]
            );
        } catch (\Exception $exception) {
            self::fail($exception->getMessage());
        }

        $this->addToAssertionCount(1);
    }
}
