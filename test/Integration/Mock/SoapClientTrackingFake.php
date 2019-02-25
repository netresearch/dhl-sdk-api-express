<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Integration\Mock;

use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\ClassMap;

/**
 * @package  Dhl\Express\Test\Integration
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapClientTrackingFake extends \SoapClient
{
    /**
     * SoapClientFake constructor.
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
