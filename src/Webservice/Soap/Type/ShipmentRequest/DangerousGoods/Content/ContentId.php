<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\DangerousGoods\Content;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The content id.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ContentId extends AlphaNumeric
{
    const MIN_LENGTH = 3;
    const MAX_LENGTH = 3;
}
