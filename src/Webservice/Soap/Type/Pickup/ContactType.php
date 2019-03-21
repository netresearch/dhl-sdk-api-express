<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * ContactType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class ContactType
{
    /**
     * @var string
     */
    protected $PersonName;

    /**
     * @var string
     */
    protected $CompanyName;

    /**
     * @var string
     */
    protected $PhoneNumber;

    /**
     * @var string
     */
    protected $EmailAddress;

    /**
     * @var string
     */
    protected $MobilePhoneNumber;

    /**
     * @param string $PersonName
     * @param string $CompanyName
     * @param string $PhoneNumber
     */
    public function __construct($PersonName, $CompanyName, $PhoneNumber)
    {
        $this->PersonName = $PersonName;
        $this->CompanyName = $CompanyName;
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }

    /**
     * @param string $PersonName
     * @return self
     */
    public function setPersonName($PersonName)
    {
        $this->PersonName = $PersonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return self
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return self
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return self
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->MobilePhoneNumber;
    }

    /**
     * @param string $MobilePhoneNumber
     * @return self
     */
    public function setMobilePhoneNumber($MobilePhoneNumber)
    {
        $this->MobilePhoneNumber = $MobilePhoneNumber;
        return $this;
    }
}
