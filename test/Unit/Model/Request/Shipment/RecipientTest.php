<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Unit\Model\Request\Shipment;

use Dhl\Express\Model\Request\Recipient;
use PHPUnit\Framework\TestCase;

/**
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class RecipientTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $recipient = new Recipient(
            $countryCode = 'DE',
            $postalCode = '12345',
            $city = 'Berlin',
            $streetLines = ['Sample street 5a', 'Sample street 5b'],
            $name = 'Max Mustermann',
            $company = 'Acme',
            $phone = '004922832432423'
        );

        self::assertInstanceOf(Recipient::class, $recipient);
        self::assertSame($countryCode, $recipient->getCountryCode());
        self::assertSame($postalCode, $recipient->getPostalCode());
        self::assertSame($city, $recipient->getCity());
        self::assertSame($streetLines, $recipient->getStreetLines());
        self::assertSame($name, $recipient->getName());
        self::assertSame($company, $recipient->getCompany());
        self::assertSame($phone, $recipient->getPhone());
    }
}
