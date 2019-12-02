<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Mock;

use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\ClassMap;

/**
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapClientFake extends \SoapClient
{
    /**
     * SoapClientFake constructor.
     * @throws \SoapFault
     */
    public function __construct()
    {
        parent::__construct(
            WsdlProvider::getWsdlFile(),
            [
                'trace'      => true,
                'classmap'   => ClassMap::get(),
                'features'   => SOAP_SINGLE_ELEMENT_ARRAYS,
                'cache_wsdl' => WSDL_CACHE_NONE,
            ]
        );
    }
}
