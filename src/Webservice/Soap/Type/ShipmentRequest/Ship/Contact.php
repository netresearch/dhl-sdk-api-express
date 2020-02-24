<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact\CompanyName;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact\EmailAddress;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact\MobilePhoneNumber;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact\PersonName;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact\PhoneNumber;

/**
 * An contact section.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Contact
{
    /**
     * @var PersonName
     */
    private $PersonName;

    /**
     * @var CompanyName
     */
    private $CompanyName;

    /**
     * @var PhoneNumber
     */
    private $PhoneNumber;

    /**
     * @var null|EmailAddress
     */
    private $EmailAddress;

    /**
     * @var null|MobilePhoneNumber
     */
    private $MobilePhoneNumber;

    /**
     * Constructor.
     *
     * @param string $personName  The person name
     * @param string $companyName The company name
     * @param string $phoneNumber The phone number
     */
    public function __construct($personName, $companyName, $phoneNumber)
    {
        $this->setPersonName($personName)
            ->setCompanyName($companyName)
            ->setPhoneNumber($phoneNumber);
    }

    /**
     * Returns the person name.
     *
     * @return PersonName
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }

    /**
     * Sets the person name.
     *
     * @param string $personName The person name
     *
     * @return Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = new PersonName($personName);
        return $this;
    }

    /**
     * Returns the company name.
     *
     * @return CompanyName
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets the company name.
     *
     * @param string $companyName The company name
     *
     * @return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = new CompanyName($companyName);
        return $this;
    }

    /**
     * Returns the phone number.
     *
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Sets the phone number.
     *
     * @param string $phoneNumber The phone number
     *
     * @return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = new PhoneNumber($phoneNumber);
        return $this;
    }

    /**
     * Returns the email address.
     *
     * @return null|EmailAddress
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * Sets the email address.
     *
     * @param string $emailAddress The email address
     *
     * @return Contact
     */
    public function setEmailAddress($emailAddress)
    {
        $this->EmailAddress = new EmailAddress($emailAddress);
        return $this;
    }

    /**
     * Returns the mobile phone number.
     *
     * @return null|MobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
        return $this->MobilePhoneNumber;
    }

    /**
     * Sets the mobile phone number.
     *
     * @param string $mobilePhoneNumber The mobile phone number
     *
     * @return Contact
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->MobilePhoneNumber = new MobilePhoneNumber($mobilePhoneNumber);
        return $this;
    }
}
