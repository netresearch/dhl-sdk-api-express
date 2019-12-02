<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

use Dhl\Express\Webservice\Soap\Type\Common\Account;
use Dhl\Express\Webservice\Soap\Type\Common\Billing;
use Dhl\Express\Webservice\Soap\Type\Common\Content;
use Dhl\Express\Webservice\Soap\Type\Common\CurrencyCode;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\Money;
use Dhl\Express\Webservice\Soap\Type\Common\PaymentInfo;
use Dhl\Express\Webservice\Soap\Type\Common\ShipTimestamp;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;

/**
 * The requested shipment.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RequestedShipment
{
    /**
     * The DropOffType is used to indicate whether a scheduled pickup is required as part of the
     * consideration for the rate request. There are two possible values to indicate whether a pickup
     * is considered.
     *
     * @var DropOffType
     */
    private $DropOffType;

    /**
     * The NextBusinessDay field is used to indicate that the Rate Request process should query the next
     * business day for available services if the current request is beyond cutoff, or occurs on a
     * weekend or holiday.
     *
     * @var null|NextBusinessDay
     */
    private $NextBusinessDay;

    /**
     * The Ship section outlines the shipper and receiver for the specific rate request. In the context
     * to rate requests, the street address elements are not critical, since capability and rate are
     * determined based on city, postal code, and country code. Please note that the Shipper and
     * Recipient structures are identical.
     *
     * @var Ship
     */
    private $Ship;

    /**
     * The Packages section details the weight and dimensions of the individual pieces of the shipment.
     * For example, the shipper may tender a single shipment with multiple pieces, and each piece may have a
     * distinct shipping label. In this context, a RequestedPackage node represents each individual piece,
     * and there is a limitation of 50 RequestedPackage nodes in the request.
     *
     * @var Packages
     */
    private $Packages;

    /**
     * The ShipmentTimeStamp node is the date/time stamp (including GMT offset) when the shipment will be
     * ready for shipping and tendered to the carrier, either as part of a scheduled pickup, regular pickup,
     * station drop off, etc. Please note that the timestamp for this event does not represent the time of the
     * execution of the service, and should not be considered a system event.
     *
     * @var ShipTimestamp
     */
    private $ShipTimestamp;

    /**
     * The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value
     * corresponds to the units of weight and measurement which are used throughout the message processing.
     * The value of ‘SI’ corresponds to KG and CM, respectively, while the value of ‘SU’ corresponds to
     * LB and IN, respectively.
     *
     * @var UnitOfMeasurement
     */
    private $UnitOfMeasurement;

    /**
     * The Contents node details whether a shipment is non-dutiable (value DOCUMENTS) or dutiable (NON_DOCUMENTS).
     * Depending on the nature of the contents of the shipment, is customs duties are applicable, different
     * products may be offered by the DHL web services.
     *
     * @var null|Content
     */
    private $Content;

    /**
     * The Money contains the value of the shipment. The field is optional decimal with a total length
     * of 18 characters 3 corresponding to the fraction part.
     *
     * @var null|Money
     */
    private $DeclaredValue;

    /**
     * This is to specify the currency code for the declared value. It is an optional field with a length
     * of 3 characters.
     *
     * @var null|CurrencyCode
     */
    private $DeclaredValueCurrencyCode;

    /**
     * The PaymentInfo node details the potential terms of trade for this specific shipment, and the schema
     * itself defines the possible enumerated values for this field.
     *
     * @var null|PaymentInfo
     */
    private $PaymentInfo;

    /**
     * The Account field details the DHL account number used for the rate request. When the account number is
     * in this field, this account number serves as both the shipper account as well as payer account.
     * DHL recommends the use the more robust Billing structure.
     *
     * @var null|Account
     */
    private $Account;

    /**
     * The Billing structure functions as a more robust alternative to the single Account field, and allows
     * for using a payer account different than the shipper account (to allow for bill-to receiver or bill-to
     * third party). The web service requester should use either the Account field or the Billing structure
     * to communicate account information, and DHL recommends the Billing structure.
     *
     * @var null|Billing
     */
    private $Billing;

    /**
     * The SpecialServices section communicates additional shipping services, such as Insurance
     * (or Shipment Value Protection).
     *
     * @var null|SpecialServices
     */
    private $SpecialServices;

    /**
     * Flag used to request all the existing special services for the requested product in the response message.
     * If the value is "Y" all the additional services available for the product selected will be returned.
     * The default value is "N".
     *
     * @var null|RequestValueAddedServices
     */
    private $RequestValueAddedServices;

    /**
     * Constructor.
     *
     * @param string $dropOffType The drop off type
     * @param Ship $ship The ship section containing shippers/recipients address
     * @param Packages $packages The packages list
     * @param int|string|\DateTime $shipTimestamp The ship timestamp (int timestamp, date string or \DateTime instance)
     * @param string $unitOfMeasurement The unit of measurement
     * @throws \Exception
     */
    public function __construct(
        $dropOffType,
        Ship $ship,
        Packages $packages,
        $shipTimestamp,
        $unitOfMeasurement
    ) {
        $this->setDropOffType($dropOffType)
             ->setShip($ship)
             ->setPackages($packages)
             ->setShipTimestamp($shipTimestamp)
             ->setUnitOfMeasurement($unitOfMeasurement);
    }

    /**
     * Returns the drop off type.
     *
     * @return DropOffType
     */
    public function getDropOffType()
    {
        return $this->DropOffType;
    }

    /**
     * Sets the drop off type.
     *
     * @param string $dropOffType The drop off type
     *
     * @return self
     */
    public function setDropOffType($dropOffType)
    {
        $this->DropOffType = new DropOffType($dropOffType);
        return $this;
    }

    /**
     * Returns the next business day.
     *
     * @return null|NextBusinessDay
     */
    public function getNextBusinessDay()
    {
        return $this->NextBusinessDay;
    }

    /**
     * Sets the next business day.
     *
     * @param string|bool $nextBusinessDay The next business day (either Y/N or true/false)
     *
     * @return self
     */
    public function setNextBusinessDay($nextBusinessDay)
    {
        $this->NextBusinessDay = new NextBusinessDay($nextBusinessDay);
        return $this;
    }

    /**
     * Returns the ship section.
     *
     * @return Ship
     */
    public function getShip()
    {
        return $this->Ship;
    }

    /**
     * Sets the ship section.
     *
     * @param Ship $ship The ship section
     *
     * @return self
     */
    public function setShip(Ship $ship)
    {
        $this->Ship = $ship;
        return $this;
    }

    /**
     * Returns the packages section.
     *
     * @return Packages
     */
    public function getPackages()
    {
        return $this->Packages;
    }

    /**
     * Sets the packages section.
     *
     * @param Packages $packages The packages
     *
     * @return self
     */
    public function setPackages(Packages $packages)
    {
        $this->Packages = $packages;
        return $this;
    }

    /**
     * Returns the ship timestamp.
     *
     * @return ShipTimestamp
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }

    /**
     * Sets the ship timestamp.
     *
     * @param int|string|\DateTime $shipTimestamp The ship timestamp (int timestamp, date string or \DateTime instance)
     *
     * @return self
     * @throws \Exception
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->ShipTimestamp = new ShipTimestamp($shipTimestamp);
        return $this;
    }

    /**
     * Returns the unit of measurement.
     *
     * @return UnitOfMeasurement
     */
    public function getUnitOfMeasurement()
    {
        return $this->UnitOfMeasurement;
    }

    /**
     * Sets the unit of measurement.
     *
     * @param string $unitOfMeasurement The unit of measurement
     *
     * @return self
     */
    public function setUnitOfMeasurement($unitOfMeasurement)
    {
        $this->UnitOfMeasurement = new UnitOfMeasurement($unitOfMeasurement);
        return $this;
    }

    /**
     * Returns the content.
     *
     * @return null|Content
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * Sets the content.
     *
     * @param string $content The content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->Content = new Content($content);
        return $this;
    }

    /**
     * Returns the declared value.
     *
     * @return null|Money
     */
    public function getDeclaredValue()
    {
        return $this->DeclaredValue;
    }

    /**
     * Sets the declared value.
     *
     * @param float $declaredValue The declared value
     *
     * @return self
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->DeclaredValue = new Money($declaredValue);
        return $this;
    }

    /**
     * Returns the declared value currency code.
     *
     * @return null|CurrencyCode
     */
    public function getDeclaredValueCurrencyCode()
    {
        return $this->DeclaredValueCurrencyCode;
    }

    /**
     * Sets the declared value currency code.
     *
     * @param string $declaredValueCurrencyCode The declared value currency code
     *
     * @return self
     */
    public function setDeclaredValueCurrencyCode($declaredValueCurrencyCode)
    {
        $this->DeclaredValueCurrencyCode = new CurrencyCode($declaredValueCurrencyCode);
        return $this;
    }

    /**
     * Returns the payment info.
     *
     * @return null|PaymentInfo
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }

    /**
     * Sets the payment info.
     *
     * @param string $paymentInfo The payment info
     *
     * @return self
     */
    public function setPaymentInfo($paymentInfo)
    {
        $this->PaymentInfo = new PaymentInfo($paymentInfo);
        return $this;
    }

    /**
     * Returns the account number.
     *
     * @return null|Account
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * Sets the account number.
     *
     * @param string $account The account number
     * @return self
     * @throws \InvalidArgumentException
     *
     */
    public function setAccount($account)
    {
        $this->Account = new Account($account);

        return $this;
    }

    /**
     * Returns the billing section.
     *
     * @return null|Billing
     */
    public function getBilling()
    {
        return $this->Billing;
    }

    /**
     * Sets the billing section.
     *
     * @param Billing $billing The billing section
     *
     * @return self
     */
    public function setBilling(Billing $billing)
    {
        $this->Billing = $billing;
        return $this;
    }

    /**
     * Returns the special services section.
     *
     * @return null|SpecialServices
     */
    public function getSpecialServices()
    {
        return $this->SpecialServices;
    }

    /**
     * Sets the special services section.
     *
     * @param SpecialServices $specialServices The special services section
     *
     * @return self
     */
    public function setSpecialServices(SpecialServices $specialServices)
    {
        $this->SpecialServices = $specialServices;
        return $this;
    }

    /**
     * Returns the requested value added services section flag.
     *
     * @return null|RequestValueAddedServices
     */
    public function getRequestValueAddedServices()
    {
        return $this->RequestValueAddedServices;
    }

    /**
     * Sets the requested value added services section.
     *
     * @param string|bool $requestValueAddedServices Whether the requested value added services section should
     *                                               be included or not (either Y/N or true/false)
     *
     * @return self
     */
    public function setRequestValueAddedServices($requestValueAddedServices)
    {
        $this->RequestValueAddedServices = new RequestValueAddedServices($requestValueAddedServices);
        return $this;
    }
}
