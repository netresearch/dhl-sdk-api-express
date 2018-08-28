<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_ContactType
{

    /**
     * @var PersonName $PersonName
     */
    protected $PersonName;

    /**
     * @var CompanyName $CompanyName
     */
    protected $CompanyName;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber;

    /**
     * @var EmailAddress $EmailAddress
     */
    protected $EmailAddress;

    /**
     * @var MobilePhoneNumber $MobilePhoneNumber
     */
    protected $MobilePhoneNumber;

    /**
     * @param PersonName $PersonName
     * @param CompanyName $CompanyName
     * @param PhoneNumber $PhoneNumber
     */
    public function __construct($PersonName, $CompanyName, $PhoneNumber)
    {
        $this->PersonName = $PersonName;
        $this->CompanyName = $CompanyName;
        $this->PhoneNumber = $PhoneNumber;
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType
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
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ContactType
     */
    public function setMobilePhoneNumber($MobilePhoneNumber)
    {
        $this->MobilePhoneNumber = $MobilePhoneNumber;
        return $this;
    }
}
