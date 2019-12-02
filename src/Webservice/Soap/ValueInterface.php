<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap;

/**
 * Interface for value object.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
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
