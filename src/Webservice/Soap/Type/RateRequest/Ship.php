<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address;

/**
 * The Ship section outlines the shipper and receiver for the specific rate request. In the context to rate
 * requests, the street address elements are not critical, since capability and rate are determined based on
 * city, postal code, and country code. Please note that the Shipper and Recipient structures are identical.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Ship
{
    /**
     * The shipper address.
     *
     * @var Address
     */
    private $Shipper;

    /**
     * The recipient address.
     *
     * @var Address
     */
    private $Recipient;

    /**
     * Constructs the ship section.
     *
     * @param Address $shipper   The shipper address
     * @param Address $recipient The recipient address
     */
    public function __construct(Address $shipper, Address $recipient)
    {
        $this->setShipper($shipper)
            ->setRecipient($recipient);
    }

    /**
     * Returns the shipper address.
     *
     * @return Address
     */
    public function getShipper()
    {
        return $this->Shipper;
    }

    /**
     * Sets the shipper address.
     *
     * @param Address $address The shipper address
     *
     * @return self
     */
    public function setShipper(Address $address)
    {
        $this->Shipper = $address;
        return $this;
    }

    /**
     * Returns the recipient address.
     *
     * @return Address
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * Sets the recipient address.
     *
     * @param Address $address The recipient address
     *
     * @return self
     */
    public function setRecipient(Address $address)
    {
        $this->Recipient = $address;
        return $this;
    }
}
