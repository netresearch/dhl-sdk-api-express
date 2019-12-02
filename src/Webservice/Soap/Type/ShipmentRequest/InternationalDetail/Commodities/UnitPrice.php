<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities;

use Dhl\Express\Webservice\Soap\Type\Common\Money;

/**
 * The price per item in the shipment, e.g. 7.50 € if one of the books costs 7.50€.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class UnitPrice extends Money
{
}
