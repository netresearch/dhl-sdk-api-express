<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The shipment identification number does not need to be transmitted in the request as the operation will assign
 * a new number and return it in the response. Only used when UseOwnShipmentIdentificationNumber set to Y and this
 * feature enabled within client profile.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ShipmentIdentificationNumber extends AlphaNumeric
{
    const MAX_LENGTH = 10;
}
