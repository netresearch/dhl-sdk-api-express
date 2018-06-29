<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap;

use Dhl\Express\Webservice\Soap\ClassMap;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Rico Sonntag <rico.sonntag@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class TestSoapClient extends \SoapClient
{
    private const WSDL = __DIR__ . '/Wsdl/expressRateBook.wsdl';

    /**
     * Constructor.
     *
     * @param string $location Used to load the specified response mock
     */
    public function __construct()
    {
        $options = [
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => ClassMap::get(),
        ];

        parent::__construct(self::WSDL, $options);
    }
}
