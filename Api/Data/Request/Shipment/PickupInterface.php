<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Shipment;

/**
 * Shipper Interface.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface PickupInterface
{
    /**
     * Returns the shippers name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns the shippers company.
     *
     * @return string
     */
    public function getCompany(): string;

    /**
     * Returns the shippers phone number.
     *
     * @return string
     */
    public function getPhone(): string;

    /**
     * Returns the shippers street lines.
     *
     * @return string[]
     */
    public function getStreetLines(): array;

    /**
     * Returns the shippers city.
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Returns the shippers postal code.
     *
     * @return string
     */
    public function getPostalCode(): string;

    /**
     * Returns the shippers country code.
     *
     * @return string
     */
    public function getCountryCode(): string;
}
