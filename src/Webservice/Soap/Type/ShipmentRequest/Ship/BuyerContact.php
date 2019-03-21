<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact as ShipmentContact;

/**
 * A buyer contact.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class BuyerContact extends ShipmentContact
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
}
