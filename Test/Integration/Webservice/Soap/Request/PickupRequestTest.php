<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Dhl\Express\Webservice\Soap\Type\Pickup\AddressType;
use Dhl\Express\Webservice\Soap\Type\Pickup\Billing;
use Dhl\Express\Webservice\Soap\Type\Pickup\ClientDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\CommoditiesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ContactInfoType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ContactType;
use Dhl\Express\Webservice\Soap\Type\Pickup\DimensionsType;
use Dhl\Express\Webservice\Soap\Type\Pickup\InternationDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\NotificationType;
use Dhl\Express\Webservice\Soap\Type\Pickup\PackagesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\PickUpShipmentType;
use Dhl\Express\Webservice\Soap\Type\Pickup\RequestedPackagesType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipmentDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipmentInfoType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipmentPaymentType;
use Dhl\Express\Webservice\Soap\Type\Pickup\ShipType;
use Dhl\Express\Webservice\Soap\Type\Pickup\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\SoapPickupRequest;
use Dhl\Express\Webservice\Soap\Type\SoapPickupResponse;

/**
 * Tests RateRequest
 */
class PickupRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     */
    public function PickupRequestXmlMapping()
    {
        $shipment = new PickUpShipmentType(
            new ShipmentInfoType(
                'U',
                new Billing(
                    'XXXXXXXXX',
                    ShipmentPaymentType::S
                ),
                UnitOfMeasurement::SI
            ),
            '2018-08-11T12:59:00 GMT+01:00',
            new InternationDetailType(
                new CommoditiesType('Computer Parts')
            ),
            new ShipType(
                new ContactInfoType(
                    new ContactType(
                        'Topaz',
                        'DHL Express',
                        '+31 6 53464291'
                    ),
                    new AddressType(
                        'GloWS',
                        'Eindhoven',
                        '5657 ES',
                        'NL'
                    )
                ),
                new ContactInfoType(
                    new ContactType(
                        'Jack Jones',
                        'J and J Company',
                        '+44 25 77884444'
                    ),
                    new AddressType(
                        'Penny lane',
                        'Liverpool',
                        'AA21 9AA',
                        'GB'
                    )
                )
            ),
            new PackagesType(
                new RequestedPackagesType(
                    12.0,
                    new DimensionsType(70, 21, 44),
                    'My-PU-Call-1',
                    1
                )
            )
        );

        $soapRequest = new SoapPickupRequest($shipment);
        $soapRequest->setMessageId('2364878234817650001982134234');
        $soapRequest->setClientDetail(new ClientDetailType());

        $soapClientFactory = new SoapClientFactory();
        $soapClient = $soapClientFactory->create(
            'user',
            'password',
            'https://wsbexpress.dhl.com/sndpt/requestPickup?WSDL',
            'PickUpRequest'
        );

        /** @var SoapPickupResponse $response */
        $response = $soapClient->__soapCall('PickUpRequest', [$soapRequest]);

        $this->assertInstanceOf(SoapPickupResponse::class, $response);

        if (is_array($response->getNotification())) {
            foreach ($response->getNotification() as $notification) {
                /** @var NotificationType $notification*/
                $this->assertInstanceOf(NotificationType::class, $notification);
            }
        } else {
            $this->assertInstanceOf(NotificationType::class, $response->getNotification()->g);
        }
    }
}
