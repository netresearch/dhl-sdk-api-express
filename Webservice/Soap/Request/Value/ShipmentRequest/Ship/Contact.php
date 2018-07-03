<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship;

use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\Contact\PersonName;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\Contact\CompanyName;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\Contact\EmailAddress;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\Contact\MobilePhoneNumber;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Ship\Contact\PhoneNumber;

/**
 * An contact section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(string $personName, string $companyName, string $phoneNumber)
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
    public function getPersonName(): PersonName
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
    public function setPersonName(string $personName): Contact
    {
        $this->PersonName = new PersonName($personName);
        return $this;
    }

    /**
     * Returns the company name.
     *
     * @return CompanyName
     */
    public function getCompanyName(): CompanyName
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
    public function setCompanyName(string $companyName): Contact
    {
        $this->CompanyName = new CompanyName($companyName);
        return $this;
    }

    /**
     * Returns the phone number.
     *
     * @return PhoneNumber
     */
    public function getPhoneNumber(): PhoneNumber
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
    public function setPhoneNumber(string $phoneNumber): Contact
    {
        $this->PhoneNumber = new PhoneNumber($phoneNumber);
        return $this;
    }

    /**
     * Returns the email address.
     *
     * @return null|EmailAddress
     */
    public function getEmailAddress(): ?EmailAddress
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
    public function setEmailAddress(string $emailAddress): Contact
    {
        $this->EmailAddress = new EmailAddress($emailAddress);
        return $this;
    }

    /**
     * Returns the mobile phone number.
     *
     * @return null|MobilePhoneNumber
     */
    public function getMobilePhoneNumber(): ?MobilePhoneNumber
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
    public function setMobilePhoneNumber(string $mobilePhoneNumber): Contact
    {
        $this->MobilePhoneNumber = new MobilePhoneNumber($mobilePhoneNumber);
        return $this;
    }
}
