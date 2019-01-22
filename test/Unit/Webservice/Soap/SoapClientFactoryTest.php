<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap;

use Dhl\Express\Webservice\Soap\SoapClientFactory;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class SoapClientFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * We cannot test soap client internals / validate whether the soap client
     * was initialized correctly. Also, initializing a \SoapClient triggers a
     * wsdl request, which is not desired during test runs.
     *
     * @test
     */
    public function defaultWsdlIsAvailable()
    {
        self::assertInternalType('string', SoapClientFactory::WSDL);
    }
}
