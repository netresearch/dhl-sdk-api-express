<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest;

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
     * @param PersonName  $personName  The person name
     * @param CompanyName $companyName The company name
     * @param PhoneNumber $phoneNumber The phone number
     */
    public function __construct(PersonName $personName, CompanyName $companyName, PhoneNumber $phoneNumber)
    {
        $this->setPersonName($personName)
            ->setCompanyName($companyName)
            ->setPhoneNumber($phoneNumber);
    }

    /**
     * @return PersonName
     */
    public function getPersonName()
    {
      return $this->PersonName;
    }

    /**
     * @param PersonName $PersonName
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType
     */
    public function setPersonName($PersonName)
    {
      $this->PersonName = $PersonName;
      return $this;
    }

    /**
     * @return CompanyName
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param CompanyName $CompanyName
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return EmailAddress
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param EmailAddress $EmailAddress
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

    /**
     * @return MobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
      return $this->MobilePhoneNumber;
    }

    /**
     * @param MobilePhoneNumber $MobilePhoneNumber
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_ContactType
     */
    public function setMobilePhoneNumber($MobilePhoneNumber)
    {
      $this->MobilePhoneNumber = $MobilePhoneNumber;
      return $this;
    }

}
