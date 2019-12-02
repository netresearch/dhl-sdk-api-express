<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The export Reference field, appears on label.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ExportReference extends AlphaNumeric
{
    const MIN_LENGTH = 0;
    const MAX_LENGTH = 40;
}
