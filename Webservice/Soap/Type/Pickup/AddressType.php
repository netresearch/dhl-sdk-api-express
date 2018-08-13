<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * AddressType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class AddressType
{
    /**
     * @var string
     */
    protected $StreetLines;

    /**
     * @var string
     */
    protected $StreetName;

    /**
     * @var string
     */
    protected $StreetNumber;

    /**
     * @var string
     */
    protected $StreetLines2;

    /**
     * @var string
     */
    protected $StreetLines3;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $StateOrProvinceCode;

    /**
     * @var string
     */
    protected $PostalCode;

    /**
     * @var string
     */
    protected $CountryCode;

    /**
     * @param string StreetLines $StreetLines
     * @param string $City
     * @param string $PostalCode
     * @param string $CountryCode
     */
    public function __construct(string $StreetLines, string $City, string $PostalCode, string $CountryCode)
    {
        $this->StreetLines = $StreetLines;
        $this->City = $City;
        $this->PostalCode = $PostalCode;
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return string
     */
    public function getStreetLines(): string
    {
        return $this->StreetLines;
    }

    /**
     * @param string $StreetLines
     * @return self
     */
    public function setStreetLines(string $StreetLines): self
    {
        $this->StreetLines = $StreetLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->StreetName;
    }

    /**
     * @param string $StreetName
     * @return self
     */
    public function setStreetName($StreetName): self
    {
        $this->StreetName = $StreetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     * @return self
     */
    public function setStreetNumber($StreetNumber): self
    {
        $this->StreetNumber = $StreetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines2(): string
    {
        return $this->StreetLines2;
    }

    /**
     * @param string $StreetLines2
     * @return self
     */
    public function setStreetLines2($StreetLines2): self
    {
        $this->StreetLines2 = $StreetLines2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines3(): string
    {
        return $this->StreetLines3;
    }

    /**
     * @param string $StreetLines3
     * @return self
     */
    public function setStreetLines3($StreetLines3): self
    {
        $this->StreetLines3 = $StreetLines3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return self
     */
    public function setCity($City): self
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceCode(): string
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * @param string $StateOrProvinceCode
     * @return self
     */
    public function setStateOrProvinceCode($StateOrProvinceCode): self
    {
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return self
     */
    public function setPostalCode($PostalCode): self
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return self
     */
    public function setCountryCode($CountryCode): self
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }
}
