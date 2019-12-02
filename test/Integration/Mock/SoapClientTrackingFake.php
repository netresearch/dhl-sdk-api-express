<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Mock;

use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\ClassMap;

/**
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapClientTrackingFake extends \SoapClient
{
    /**
     * SoapClientFake constructor.
     *
     * @throws \SoapFault
     */
    public function __construct()
    {
        parent::__construct(
            WsdlProvider::getTrackingWsdlFile(),
            [
                'trace'    => true,
                'classmap' => ClassMap::get(),
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]
        );
    }
}
