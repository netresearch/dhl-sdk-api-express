<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;

use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\CountryCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities\CustomsValue;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities\Description;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities\NumberOfPieces;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities\Quantity;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities\UnitPrice;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\Commodities\USFillingTypeValue;

/**
 * The InternationalDetail section conveys data elements for international shipping.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class Commodities
{
    /**
     * The number of pieces. Transmit the number of pieces in shipment, but for validation
     * purposes this information is calculated based on the number of pieces in the message.
     *
     * @var null|NumberOfPieces
     */
    private $NumberOfPieces;

    /**
     * The description field is used as a description of goods for the label and manifest.
     *
     * @var Description
     */
    private $Description;

    /**
     * The country of manufacture.
     *
     * @var null|CountryCode
     */
    private $CountryOfManufacture;

    /**
     * The quantity.
     *
     * @var null|Quantity
     */
    private $Quantity;

    /**
     * The unit price.
     *
     * @var null|UnitPrice
     */
    private $UnitPrice;

    /**
     * The customs value. Communicates the customs value of the shipment, used for manifesting.
     *
     * @var null|CustomsValue
     */
    private $CustomsValue;

    /**
     * The USFilingTypeValue is used for the US AES4, FTR and ITN numbers to be printed on the transport label.
     *
     * @var null|USFillingTypeValue
     */
    private $USFillingTypeValue;

    /**
     * Constructor.
     *
     * @param string $description The description
     */
    public function __construct($description)
    {
        $this->setDescription($description);
    }

    /**
     * Returns the number of pieces.
     *
     * @return null|NumberOfPieces
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }

    /**
     * Sets the number of pieces.
     *
     * @param int $numberOfPieces The number of pieces
     *
     * @return self
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->NumberOfPieces = new NumberOfPieces($numberOfPieces);
        return $this;
    }

    /**
     * Returns the description.
     *
     * @return Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the description.
     *
     * @param string $description The description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->Description = new Description($description);
        return $this;
    }

    /**
     * Returns the country of manufacture.
     *
     * @return null|CountryCode
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }

    /**
     * Sets the country of manufacture.
     *
     * @param string $countryOfManufacture The country of manufacture
     *
     * @return self
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->CountryOfManufacture = new CountryCode($countryOfManufacture);
        return $this;
    }

    /**
     * Returns the quantity.
     *
     * @return null|Quantity
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Sets the quantity.
     *
     * @param int $quantity The quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = new Quantity($quantity);
        return $this;
    }

    /**
     * Returns the unit price.
     *
     * @return null|UnitPrice
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * Sets the unit price.
     *
     * @param float $unitPrice The unit price
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = new UnitPrice($unitPrice);
        return $this;
    }

    /**
     * Returns the customs value.
     *
     * @return null|CustomsValue
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }

    /**
     * Sets the customs value.
     *
     * @param float $customsValue The customs value
     *
     * @return self
     */
    public function setCustomsValue($customsValue)
    {
        $this->CustomsValue = new CustomsValue($customsValue);
        return $this;
    }

    /**
     * Returns the us filling type value.
     *
     * @return null|USFillingTypeValue
     */
    public function getUSFillingTypeValue()
    {
        return $this->USFillingTypeValue;
    }

    /**
     * Sets the us filling type value.
     *
     * @param string $usFillingTypeValue The us filling type value
     *
     * @return self
     */
    public function setUSFillingTypeValue($usFillingTypeValue)
    {
        $this->USFillingTypeValue = new USFillingTypeValue($usFillingTypeValue);
        return $this;
    }
}
