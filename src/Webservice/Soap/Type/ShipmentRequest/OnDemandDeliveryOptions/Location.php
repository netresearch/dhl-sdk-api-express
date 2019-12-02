<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * A location.
 *
 * Mandatory if the above delivery option is SX and should advise DHL where exactly to leave the
 * shipment (ie.front door etc).
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Location extends AlphaNumeric
{
    const MAX_LENGTH = 15;
}
