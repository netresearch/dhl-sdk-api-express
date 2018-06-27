<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\RecipientAddressInterface;
use PHPUnit\Framework\TestCase;

/**
 * @package Dhl\Express\Test\Unit
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.netresearch.de/
 */
class RecipientAddressTest extends TestCase
{
    /**
     * @var RecipientAddressInterface
     */
    private $recipientAddress;

    /**
     * Setup
     */
    protected function setUp()
    {
        $this->recipientAddress = new RecipientAddress(
            'Sample street 5a',
            'Berlin',
            '12345',
            49
        );
    }

    /**
     * @test
     */
    public function testRecipientAddressType()
    {
        $this->assertInstanceOf(RecipientAddressInterface::class, $this->recipientAddress);
    }

    /**
     * @test
     */
    public function testStreetLine()
    {
        $this->assertEquals($this->recipientAddress->getStreetLine(), 'Sample street 5a');
    }

    /**
     * @test
     */
    public function testCity()
    {
        $this->assertEquals($this->recipientAddress->getCity(), 'Berlin');
    }

    /**
     * @test
     */
    public function testPostalCode()
    {
        $this->assertEquals($this->recipientAddress->getPostalCode(), '12345');
    }

    /**
     * @test
     */
    public function testCountryCode()
    {
        $this->assertEquals($this->recipientAddress->getCountryCode(), '49');
    }
}
