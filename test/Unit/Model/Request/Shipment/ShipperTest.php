<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Test\Unit\Model\Request\Shipment;

use Dhl\Express\Model\Request\Shipment\Shipper;
use PHPUnit\Framework\TestCase;

/**
 * @author  Ronny Gertler <ronny.gertler@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class ShipperTest extends TestCase
{
    /**
     * @test
     */
    public function propertiesArePopulatedAndAccessible()
    {
        $shipper = new Shipper(
            $countryCode = 'DE',
            $postalCode = '12345',
            $city = 'Berlin',
            $streetLines = ['Sample street 5a', 'Sample street 5b'],
            $name = 'Max Mustermann',
            $company = 'Acme',
            $phone = '004922832432423'
        );

        self::assertInstanceOf(Shipper::class, $shipper);
        self::assertSame($countryCode, $shipper->getCountryCode());
        self::assertSame($postalCode, $shipper->getPostalCode());
        self::assertSame($city, $shipper->getCity());
        self::assertSame($streetLines, $shipper->getStreetLines());
        self::assertSame($name, $shipper->getName());
        self::assertSame($company, $shipper->getCompany());
        self::assertSame($phone, $shipper->getPhone());
    }
}
