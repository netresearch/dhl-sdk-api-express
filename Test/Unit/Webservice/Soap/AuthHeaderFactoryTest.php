<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap;

use Dhl\Express\Webservice\Soap\AuthHeaderFactory;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class AuthHeaderFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * We cannot test auth header internals / validate whether the auth header
     * was initialized correctly.
     *
     * @test
     */
    public function wsseNamespacesAreAvailable()
    {
        self::assertInternalType('string', AuthHeaderFactory::WSS_NS);
        self::assertInternalType('string', AuthHeaderFactory::WSU_NS);
    }
}
