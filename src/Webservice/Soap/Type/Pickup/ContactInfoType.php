<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * ContactInfoType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ContactInfoType
{
    /**
     * @var ContactType
     */
    protected $Contact;

    /**
     * @var AddressType
     */
    protected $Address;

    /**
     * @param ContactType $Contact
     * @param AddressType $Address
     */
    public function __construct(ContactType $Contact, AddressType $Address)
    {
        $this->Contact = $Contact;
        $this->Address = $Address;
    }

    /**
     * @return ContactType
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param ContactType $Contact
     * @return self
     */
    public function setContact(ContactType $Contact)
    {
        $this->Contact = $Contact;
        return $this;
    }

    /**
     * @return AddressType
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param AddressType $Address
     * @return self
     */
    public function setAddress(AddressType $Address)
    {
        $this->Address = $Address;
        return $this;
    }
}
