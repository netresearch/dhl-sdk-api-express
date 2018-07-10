<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Shipment;

/**
 * Recipient Interface.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RecipientInterface
{
    /**
     * Returns the recipients name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns the recipients company.
     *
     * @return string
     */
    public function getCompany(): string;

    /**
     * Returns the recipients phone number.
     *
     * @return string
     */
    public function getPhone(): string;

    /**
     * Returns the recipients street lines.
     *
     * @return string[]
     */
    public function getStreetLines(): array;

    /**
     * Returns the recipients city.
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Returns the recipients postal code.
     *
     * @return string
     */
    public function getPostalCode(): string;

    /**
     * Returns the recipients country code.
     *
     * @return string
     */
    public function getCountryCode(): string;
}
