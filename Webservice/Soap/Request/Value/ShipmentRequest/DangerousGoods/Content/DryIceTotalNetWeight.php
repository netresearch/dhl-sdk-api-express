<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\DangerousGoods\Content;

use Dhl\Express\Webservice\Soap\Request\Value\AlphaNumeric;

/**
 * The dry ice total net weight.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class DryIceTotalNetWeight extends AlphaNumeric
{
    protected const MAX_LENGTH = 7;
}
