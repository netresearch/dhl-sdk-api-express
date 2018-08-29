<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Request\Rate;

/**
 * Recipient Address Interface.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface RecipientAddressInterface
{
    /**
     * Returns the recipient street lines.
     *
     * @return string[]
     */
    public function getStreetLines();

    /**
     * Returns the recipient city name.
     *
     * @return string
     */
    public function getCity();

    /**
     * Returns the recipient postal code.
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Returns the recipient country code.
     *
     * @return string
     */
    public function getCountryCode();
}
