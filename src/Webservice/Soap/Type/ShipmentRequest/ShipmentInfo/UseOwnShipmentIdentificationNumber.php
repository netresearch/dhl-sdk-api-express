<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;

use Dhl\Express\Webservice\Soap\Type\Common\YesNo;

/**
 * The use own shipment identification number flag.
 *
 * Y or 1 -= allows you to define your own AWB in the tag below
 * N or 0 = Auto-allocates the AWB from DHL Express
 *
 * You can request your own AWB range from your DHL Express IT consultant and store these locally in your integration
 * however this is not needed as if you leave this tag then DHL will automatically assign the AWB centrally.
 * In addition this special function needs to be enabled for your username by your DHL Express IT Consultant.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class UseOwnShipmentIdentificationNumber extends YesNo
{
}
