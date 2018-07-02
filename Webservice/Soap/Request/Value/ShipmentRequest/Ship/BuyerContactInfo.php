<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship;

/**
 * The contact info section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class BuyerContactInfo
{
    /**
     * The contact.
     * 
     * @var BuyerContact
     */
    protected $Contact;

    /**
     * The address.
     * 
     * @var BuyerAddress
     */
    protected $Address;

    /**
     * Constructor. 
     * 
     * @param BuyerContact $contact The contact
     * @param BuyerAddress $address The address
     */
    public function __construct(BuyerContact $contact, BuyerAddress $address)
    {
      $this->setContact($contact)
          ->setAddress($address);
    }

    /**
     * Returns the contact.
     * 
     * @return BuyerContact
     */
    public function getContact(): BuyerContact
    {
        return $this->Contact;
    }

    /**
     * Sets the contact.
     * 
     * @param BuyerContact $contact The contact.
     *                         
     * @return self
     */
    public function setContact(BuyerContact $contact): BuyerContactInfo
    {
        $this->Contact = $contact;
        return $this;
    }

    /**
     * Returns the address.
     *
     * @return BuyerAddress
     */
    public function getAddress(): BuyerAddress
    {
      return $this->Address;
    }

    /**
     * Sets the address.
     *
     * @param BuyerAddress $address The address
     *
     * @return self
     */
    public function setAddress(BuyerAddress $address): BuyerContactInfo
    {
        $this->Address = $address;
        return $this;
    }
}
