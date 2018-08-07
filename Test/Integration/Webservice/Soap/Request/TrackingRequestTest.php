<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Integration\Webservice\Soap\Request;

use Dhl\Express\Webservice\Soap\SoapClientFactory;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\AWBNumberCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\LevelOfDetails;
use Dhl\Express\Webservice\Soap\Type\Tracking\Request;
use Dhl\Express\Webservice\Soap\Type\Tracking\ServiceHeader;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequestBase;

/**
 * Tests RateRequest
 */
class TrackingRequestTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * Tests the mapping from the SOAP request classes to the proper XML structure.
     */
    public function TrackingRequestXmlMapping(): void
    {
        $messageTime = '2018-08-07T14:27:02Z';
        $serviceHeader = new ServiceHeader($messageTime, '4894d5593bd9a8259d53f1ef4e81');
        $request = new Request($serviceHeader);

        $trackingRequest = new TrackingRequest($request, LevelOfDetails::__default);
        $trackingRequest->setAWBNumber(new AWBNumberCollection(['3775580012']))
            ->setPiecesEnabled('P')
            ->setLevelOfDetails(LevelOfDetails::ALL_CHECK_POINTS);
        $trackingRequestBase = new TrackingRequestBase($trackingRequest);

        $soapRequest = new SoapTrackingRequest();
        $soapRequest->setTrackingRequest($trackingRequestBase);

        $soapClientFactory = new SoapClientFactory();
        $soapClient = $soapClientFactory->create(
            'XXX',
            'XXX',
            'https://wsbexpress.dhl.com/sndpt/glDHLExpressTrack?WSDL'
        );

        $response = $soapClient->__soapCall('trackShipmentRequest', [$soapRequest]);
    }
}
