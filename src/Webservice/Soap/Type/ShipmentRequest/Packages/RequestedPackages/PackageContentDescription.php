<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The package content description.
 *
 * This optional field allows you to provide the content description on a piece level instead of Shipment level.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class PackageContentDescription extends AlphaNumeric
{
    const MAX_LENGTH = 70;
}
