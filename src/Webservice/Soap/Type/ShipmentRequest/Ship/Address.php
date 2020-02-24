<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address as CommonAddress;

/**
 * An ship address.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Address extends CommonAddress
{
    /**
     * Constructor.
     *
     * @param string $streetLines The street lines
     * @param string $city        The city
     * @param string $postalCode  The postal code
     * @param string $countryCode The country code
     */
    public function __construct($streetLines, $city, $postalCode, $countryCode)
    {
        parent::__construct($city, $postalCode, $countryCode);

        $this->setStreetLines($streetLines);
    }
}
