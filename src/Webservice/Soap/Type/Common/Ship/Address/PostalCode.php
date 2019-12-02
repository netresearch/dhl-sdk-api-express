<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The postal code type. Alpha numeric type with 12 characters.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PostalCode extends AlphaNumeric
{
    const MIN_LENGTH = 0;
    const MAX_LENGTH = 12;
}
