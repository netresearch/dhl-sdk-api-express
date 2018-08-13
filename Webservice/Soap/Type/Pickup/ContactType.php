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
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
    public function __construct(string $PersonName, string $CompanyName, string $PhoneNumber)
    {
        $this->PersonName = $PersonName;
        $this->CompanyName = $CompanyName;
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getPersonName(): string
    {
        return $this->PersonName;
    }

    /**
     * @param string $PersonName
     * @return self
     */
    public function setPersonName(string $PersonName): self
    {
        $this->PersonName = $PersonName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return self
     */
    public function setCompanyName(string $CompanyName): self
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return self
     */
    public function setPhoneNumber(string $PhoneNumber): self
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return self
     */
    public function setEmailAddress(string $EmailAddress): self
    {
        $this->EmailAddress = $EmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber(): string
    {
        return $this->MobilePhoneNumber;
    }

    /**
     * @param string $MobilePhoneNumber
     * @return self
     */
    public function setMobilePhoneNumber(string $MobilePhoneNumber): self
    {
        $this->MobilePhoneNumber = $MobilePhoneNumber;
        return $this;
    }
}
