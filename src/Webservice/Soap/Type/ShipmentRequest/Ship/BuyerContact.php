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
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class BuyerContact extends ShipmentContact
{
    /**
     * BuyerContact constructor.
     * @param string $personName
     * @param string $companyName
     * @param string $phoneNumber
     */
    public function __construct($personName, $companyName, $phoneNumber)
    {
        parent::__construct($personName, $companyName, $phoneNumber);
    }
}
