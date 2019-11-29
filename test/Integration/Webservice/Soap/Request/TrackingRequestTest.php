<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Test\Integration\Mock\SoapClientFake;
use Dhl\Express\Test\Integration\Mock\SoapClientTrackingFake;
use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBNumberCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\LevelOfDetails;
use Dhl\Express\Webservice\Soap\Type\Tracking\Request;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceHeader;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequestBase;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests TrackingRequest
 */
class TrackingRequestTest extends TestCase
{
    /**
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     *
     * @test
     */
    public function TrackingRequestXmlMapping()
    {
        $messageTime = '2018-08-07T14:27:02Z';
        $serviceHeader = new ServiceHeader($messageTime, '4894d5593bd9a8259d53f1ef4e81');
        $request = new Request($serviceHeader);

        $trackingRequest = new TrackingRequest($request, LevelOfDetails::__DEFAULT);
        $trackingRequest->setAWBNumber(new AWBNumberCollection(['XXXXXXXXX']))
            ->setPiecesEnabled('B')
            ->setLevelOfDetails(LevelOfDetails::ALL_CHECK_POINTS);
        $trackingRequestBase = new TrackingRequestBase($trackingRequest);

        $soapRequest = new SoapTrackingRequest();
        $soapRequest->setTrackingRequest($trackingRequestBase);


        /** @var SoapClientFake|MockObject|\PHPUnit_Framework_MockObject_MockObject $soapClientMock */
        $soapClientMock = $this->getMockFromWsdl(
            WsdlProvider::getTrackingWsdlFile(),
            SoapClientTrackingFake::class,
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
                'glDHLExpressTrack_providers_services_trackShipment_Binder_trackShipmentRequest'
            )
            ->willReturn('');

        try {
            $soapClientMock->__soapCall(
                'trackShipmentRequest',
                [
                    $soapRequest
                ]
            );
        } catch (\Exception $exception) {
            self::fail($exception->getMessage());
        }

        $this->addToAssertionCount(1);
    }
}
