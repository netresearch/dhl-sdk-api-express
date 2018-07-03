<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Address as ShipmentAddress;

/**
 * The contact info section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ContactInfo
{
    /**
     * The contact.
     * 
     * @var Contact
     */
    protected $Contact;

    /**
     * The address.
     * 
     * @var ShipmentAddress
     */
    protected $Address;

    /**
     * Constructor. 
     * 
     * @param Contact         $contact The contact
     * @param ShipmentAddress $address The address
     */
    public function __construct(Contact $contact, ShipmentAddress $address)
    {
        $this->setContact($contact)
            ->setAddress($address);
    }

    /**
     * Returns the contact.
     * 
     * @return Contact
     */
    public function getContact(): Contact
    {
        return $this->Contact;
    }

    /**
     * Sets the contact.
     * 
     * @param Contact $contact The contact.
     *                         
     * @return self
     */
    public function setContact(Contact $contact): ContactInfo
    {
        $this->Contact = $contact;
        return $this;
    }

    /**
     * Returns the address.
     *
     * @return ShipmentAddress
     */
    public function getAddress(): ShipmentAddress
    {
        return $this->Address;
    }

    /**
     * Sets the address.
     *
     * @param ShipmentAddress $address The address
     *
     * @return self
     */
    public function setAddress(ShipmentAddress $address): ContactInfo
    {
        $this->Address = $address;
        return $this;
    }
}
