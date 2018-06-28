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
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $recipientAddress = new RecipientAddress(
            $countryCode = 'DE',
            $postalCode  = '12345',
            $city        = 'Berlin',
            $streetLines = ['Sample street 5a', 'Sample street 5b']
        );

        $this->assertInstanceOf(RecipientAddressInterface::class, $recipientAddress);
        $this->assertEquals($countryCode, $recipientAddress->getCountryCode());
        $this->assertEquals($postalCode, $recipientAddress->getPostalCode());
        $this->assertEquals($city, $recipientAddress->getCity());
        $this->assertEquals($streetLines, $recipientAddress->getStreetLines());
    }
}
