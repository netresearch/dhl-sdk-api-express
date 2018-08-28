<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Model\Request\Tracking\Message;
use Dhl\Express\Model\TrackingRequest;
use PHPUnit\Framework\TestCase;

/**
 * @package  Dhl\Express\Test\Unit
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingRequestMapperTest extends TestCase
{
    /**
     * @test
     */
    public function getSoapTrackingRequestFromTrackingRequest(): void
    {
        // Set up a TrackingRequest
        $request = new TrackingRequest(
            new Message(
                $messageTime = 1533720091,
                $messageReference = '2485789gn8937n6bg0386937b6087n6083n6'
            ),
            $awbNumber = ['2330982222'],
            $levelOfDetails = 'ALL_CHECK_POINTS',
            $peacesEnabled = 'B',
            false
        );

        // Map Tracking Request to SOAP Tracking Request
        $mapper = new TrackingRequestMapper();
        $soapRequest = $mapper->map($request)->getTrackingRequest()->getTrackingRequest();

        // Assertions
        $this->assertEquals(
            $messageTime,
            $soapRequest->getRequest()->getServiceHeader()->getMessageTime()
        );

        $this->assertEquals(
            $messageReference,
            $soapRequest->getRequest()->getServiceHeader()->getMessageReference()
        );

        $this->assertEquals(
            $awbNumber,
            $soapRequest->getAWBNumber()->getArrayOfAWBNumberItem()
        );

        $this->assertEquals(
            $levelOfDetails,
            $soapRequest->getLevelOfDetails()
        );

        $this->assertEquals(
            $peacesEnabled,
            $soapRequest->getPiecesEnabled()
        );
    }
}
