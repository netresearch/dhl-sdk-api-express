<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Test\Unit\Model\Request\Rate;

use Dhl\Express\Api\Data\Request\Rate\RecipientAddressInterface;
use Dhl\Express\Model\Request\Rate\RecipientAddress;
use PHPUnit\Framework\TestCase;

/**
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
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

        self::assertInstanceOf(RecipientAddressInterface::class, $recipientAddress);
        self::assertSame($countryCode, $recipientAddress->getCountryCode());
        self::assertSame($postalCode, $recipientAddress->getPostalCode());
        self::assertSame($city, $recipientAddress->getCity());
        self::assertSame($streetLines, $recipientAddress->getStreetLines());
    }
}
