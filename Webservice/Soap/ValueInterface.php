<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

/**
 * Interface for value object.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ValueInterface
{
    /**
     * Returns the value object as string.
     *
     * @return string
     */
    public function __toString();
}
