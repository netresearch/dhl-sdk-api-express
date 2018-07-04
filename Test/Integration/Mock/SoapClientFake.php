<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Mock;

use Dhl\Express\Test\Integration\Provider\WsdlProvider;
use Dhl\Express\Webservice\Soap\ClassMap;

/**
 * @package  Dhl\Express\Test\Integration
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapClientFake extends \SoapClient
{
    /**
     * SoapClientFake constructor.
     * @param string $wsdl
     * @param mixed[] $options
     */
    public function __construct($wsdl, array $options = null)
    {
        $wsdl = WsdlProvider::getWsdlFile();

        $clientOptions = [
            'trace' => true,
            'classmap' => ClassMap::get(),
            'features' => \SOAP_SINGLE_ELEMENT_ARRAYS,
        ];

        if (!empty($options)) {
            $options = array_merge($options, $clientOptions);
        }

        parent::__construct($wsdl, $options);
    }
}
