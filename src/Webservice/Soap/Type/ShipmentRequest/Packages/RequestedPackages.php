<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages;

use Dhl\Express\Webservice\Soap\Type\Common\Money;
use Dhl\Express\Webservice\Soap\Type\Common\Packages\RequestedPackages\Dimensions;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages\CustomerReferences;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages\PackageContentDescription;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages\PieceIdentificationNumber;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages\UseOwnPieceIdentificationNumber;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages\Weight;

/**
 * A requested package.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RequestedPackages
{
    /**
     * The insured value field is an optional field in the Packages section which will be deprecated from the
     * interface, as the SpecialServices section should be used to convey insured value.
     *
     * @var null|Money
     */
    private $InsuredValue;

    /**
     * Sum of the weight of the individual pieces/packages the rating request is for.
     *
     * @var Weight
     */
    private $Weight;

    /**
     * The piece identification number.
     *
     * @var null|PieceIdentificationNumber
     */
    private $PieceIdentificationNumber;

    /**
     * Whether to use own piece identification number or not.
     *
     * @var null|UseOwnPieceIdentificationNumber
     */
    private $UseOwnPieceIdentificationNumber;

    /**
     * The package content description.
     *
     * @var null|PackageContentDescription
     */
    private $PackageContentDescription;

    /**
     * Dimensions of the package.
     *
     * @var Dimensions
     */
    private $Dimensions;

    /**
     * The CustomerReferences field is used as the Piece Reference and the first instance is also used as
     * the Shipment Reference. Currently only the Shipment Reference appears on the label.
     *
     * @var CustomerReferences
     */
    private $CustomerReferences;

    /**
     * Will be used as Piece Sequence number and returned in the response.
     *
     * @var int
     */
    private $number;

    /**
     * Constructor.
     *
     * @param float      $weight             The weight of the package
     * @param Dimensions $dimensions         The dimensions of the package
     * @param string     $customerReferences The customer references
     * @param int        $number             The package number
     */
    public function __construct($weight, Dimensions $dimensions, $customerReferences, $number)
    {
        $this->setWeight($weight)
            ->setDimensions($dimensions)
            ->setCustomerReferences($customerReferences)
            ->setNumber($number);
    }

    /**
     * Returns the insurance value of the package.
     *
     * @return null|Money
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }

    /**
     * Sets the insurance value of the package.
     *
     * @param float $insuredValue The insurance value of the package
     *
     * @return RequestedPackages
     */
    public function setInsuredValue($insuredValue)
    {
        $this->InsuredValue = new Money($insuredValue);
        return $this;
    }

    /**
     * Returns the weight.
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * Sets the weight.
     *
     * @param float $weight The weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->Weight = new Weight($weight);
        return $this;
    }

    /**
     * Returns the piece identification number.
     *
     * @return null|PieceIdentificationNumber
     */
    public function getPieceIdentificationNumber()
    {
        return $this->PieceIdentificationNumber;
    }

    /**
     * Sets the piece identification number.
     *
     * @param string $pieceIdentificationNumber The piece identification number
     *
     * @return RequestedPackages
     */
    public function setPieceIdentificationNumber($pieceIdentificationNumber)
    {
        $this->PieceIdentificationNumber = new PieceIdentificationNumber($pieceIdentificationNumber);
        return $this;
    }

    /**
     * Returns whether to use own piece identification number or not.
     *
     * @return null|UseOwnPieceIdentificationNumber
     */
    public function getUseOwnPieceIdentificationNumber()
    {
        return $this->UseOwnPieceIdentificationNumber;
    }

    /**
     * Sets whether to use own piece identification number or not.
     *
     * @param string|bool $useOwnPieceIdentificationNumber Use own piece identification number or not
     *                                                     (either Y/N or true/false)
     *
     * @return RequestedPackages
     */
    public function setUseOwnPieceIdentificationNumber($useOwnPieceIdentificationNumber)
    {
        $this->UseOwnPieceIdentificationNumber = new UseOwnPieceIdentificationNumber($useOwnPieceIdentificationNumber);
        return $this;
    }

    /**
     * Returns the package content description.
     *
     * @return null|PackageContentDescription
     */
    public function getPackageContentDescription()
    {
        return $this->PackageContentDescription;
    }

    /**
     * Sets the package content description.
     *
     * @param string $packageContentDescription The package content description
     *
     * @return RequestedPackages
     */
    public function setPackageContentDescription($packageContentDescription)
    {
        $this->PackageContentDescription = new PackageContentDescription($packageContentDescription);
        return $this;
    }

    /**
     * Returns the dimensions.
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * Sets the dimensions.
     *
     * @param Dimensions $dimensions The dimensions
     *
     * @return self
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }

    /**
     * Returns the customer references.
     *
     * @return CustomerReferences
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }

    /**
     * Sets the customer references.
     *
     * @param string $customerReferences The customer references.
     *
     * @return RequestedPackages
     */
    public function setCustomerReferences($customerReferences)
    {
        $this->CustomerReferences = new CustomerReferences($customerReferences);
        return $this;
    }

    /**
     * Returns the number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the number.
     *
     * @param int $number The number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}
