<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Request\Rate;

/**
 * Shipper Address Interface.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipperAddressInterface
{
    /**
     * Returns the shipper country code.
     *
     * @return string
     */
    public function getCountryCode();

    /**
     * Returns the shipper postal code.
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Returns the shipper city name.
     *
     * @return string
     */
    public function getCity();
}
