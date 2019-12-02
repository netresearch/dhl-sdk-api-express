<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The neighbour house number.
 *
 * Mandatory if the delivery option is SW and the LWNTypeCode is N (Neighbour) – this is the house number
 * of the neighbour.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class NeighbourHouseNumber extends AlphaNumeric
{
    const MAX_LENGTH = 20;
}
