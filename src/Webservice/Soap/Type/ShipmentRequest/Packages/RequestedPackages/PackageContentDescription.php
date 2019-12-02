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
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PackageContentDescription extends AlphaNumeric
{
    const MAX_LENGTH = 70;
}
