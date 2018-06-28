<?php
namespace Dhl\Express\Test\Unit\Webservice\Soap\Request;

use Dhl\Express\Webservice\Soap\Request\RateRequest;
use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Address;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Billing;
use Dhl\Express\Webservice\Soap\Request\RateRequest\ClientDetail;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\Content;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Dimensions;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\DropOffType;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\NextBusinessDay;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Packages;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\PaymentInfo;
use Dhl\Express\Webservice\Soap\Request\RateRequest\RequestedPackages;
use Dhl\Express\Webservice\Soap\Request\RateRequest\RequestedShipment;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Service;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Services;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Ship;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\RequestValueAddedServices;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\ShipmentPaymentType;
use Dhl\Express\Webservice\Soap\Request\RateRequest\Value\UnitOfMeasurement;

/**
 * Tests RateRequest
 */
class RateRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var
     */
    protected $fixture;

    public function testRateRequest()
    {
        ini_set('xdebug.var_display_max_children', -1);
        ini_set('xdebug.var_display_max_data', -1);
        ini_set('xdebug.var_display_max_depth', -1);


        $shipperAddress = new Address('Ichikawa-shi, Chiba', '272-0138', 'JP');
        $shipperAddress->setStreetLines('1-16-24, Minami-gyotoku');

        $recipientAddress = new Address('QINGDAO SHI', '266033', 'CN');
        $recipientAddress->setStreetLines('63 RENMIN LU, QINGDAO SHI');

        $ship = new Ship($shipperAddress, $recipientAddress);

        $requestedPackages = [
            new RequestedPackages(2.0, new Dimensions(13, 12.5, 9.1), 1),
            new RequestedPackages(3.5, new Dimensions(13, 12.1, 4.5), 2),
        ];

        $packages = new Packages($requestedPackages);

        $requestedShipment = new RequestedShipment(
            DropOffType::REQUEST_COURIER,
            $ship,
            $packages,
            '2018-07-0217:00:00GMT+01:00',
            UnitOfMeasurement::SU
        );

        $specialServices = new Services([
            (new Service('II'))->setCurrencyCode('EUR')->setServiceValue(24.5),
            new Service('II'),
        ]);

        $requestedShipment->setNextBusinessDay(NextBusinessDay::Y)
            ->setContent(Content::NON_DOCUMENTS)
            ->setDeclaredValue(55.55)
            ->setDeclaredValueCurrencyCode('USD')
            ->setPaymentInfo(PaymentInfo::DDP)
            ->setAccount('XXXXXXXXX')
            ->setBilling(new Billing('12345678', ShipmentPaymentType::R))
            ->setSpecialServices($specialServices)
            ->setRequestValueAddedServices(RequestValueAddedServices::Y);

        $clientDetail = new ClientDetail();
        $clientDetail->setSso('SSO')
            ->setPlant('PLANT');

        $rateRequest = new RateRequest($requestedShipment);
        $rateRequest->setClientDetail($clientDetail);

//var_dump($rateRequest->toArray());
//        $rateResponse = $this->getClient()->api()->getRateRequest($rateRequest)->post();

        $factory    = new SoapClientFactory();
        $soapClient = $factory->create('TEST', 'TEST');

        try {
            $response = $soapClient->getRateRequest($rateRequest);

var_dump($response);
        } catch (\SoapFault $ex) {
var_dump('EXCEPTION', $ex->getMessage());
        }

var_dump($soapClient->__getLastRequest());
var_dump($soapClient->__getLastResponse());
//var_dump($soapClient->__getLastResponseHeaders());
exit;
    }
}
