<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * This node provides information on where the package should be picked up by DHL courier.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PickupLocation extends AlphaNumeric
{
    const MAX_LENGTH = 40;
}
