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
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ExportReference extends AlphaNumeric
{
    const MIN_LENGTH = 0;
    const MAX_LENGTH = 40;
}
