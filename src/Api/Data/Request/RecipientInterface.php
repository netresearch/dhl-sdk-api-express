<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request;

/**
 * Recipient Interface.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface RecipientInterface
{
    /**
     * Returns the recipients country code.
     *
     * @return string
     */
    public function getCountryCode();

    /**
     * Returns the recipients postal code.
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Returns the recipients city.
     *
     * @return string
     */
    public function getCity();

    /**
     * Returns the recipients street lines.
     *
     * @return string[]
     */
    public function getStreetLines();

    /**
     * Returns the recipients name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the recipients company.
     *
     * @return string
     */
    public function getCompany();

    /**
     * Returns the recipients phone number.
     *
     * @return string
     */
    public function getPhone();

    /**
     * Returns the recipients email.
     *
     * @return string
     */
    public function getEmail();
}
