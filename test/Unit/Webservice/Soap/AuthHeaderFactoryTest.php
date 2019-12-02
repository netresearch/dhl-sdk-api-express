<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Webservice\Soap;

use Dhl\Express\Webservice\Soap\AuthHeaderFactory;

/**
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
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
