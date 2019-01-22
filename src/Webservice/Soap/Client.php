<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap;

use Dhl\Express\Webservice\Soap\Type\SoapRateRequest;
use Dhl\Express\Webservice\Soap\Type\SoapRateResponse;
use Dhl\Express\Webservice\Soap\Type\SoapTrackingRequest;

class Client extends \SoapClient
{
    /**
     * Either performs a SOAP request or tries to load a stored XML-response to
     * prevent potentially slow/unreachable SOAP-calls to web service.
     *
     * @param string $request XML-Request
     * @param string $location Web service-URL
     * @param string $action Web service-action to be called
     * @param integer $version Version
     * @param integer $one_way One way
     *
     * @return string
     */
    public function __doRequest(
        $request,
        $location,
        $action,
        $version,
        $one_way = 0
    ) {
        // DEBUG
//        $action = substr($action, strrpos($action, '_') + 1);
//        $fileName = __DIR__ . '/../../Test/Unit/Webservice/Soap/Mock/' . $action . '.xml';
//
//        if (file_exists($fileName)) {
//            return file_get_contents($fileName);
//        }

        return parent::__doRequest(
            $request,
            $location,
            $action,
            $version,
            $one_way
        );
    }

    /**
     * Performs the "getRateRequest" request and returns the response.
     *
     * @param SoapRateRequest $rateRequest The rate request
     *
     * @return SoapRateResponse
     */
    public function getRateRequest(SoapRateRequest $rateRequest)
    {
        return $this->__soapCall('getRateRequest', [ $rateRequest ]);
    }

    public function trackShipmentRequest(SoapTrackingRequest $trackingRequest)
    {
        return $this->__soapCall('trackShipmentRequest', [$trackingRequest]);
    }
}
