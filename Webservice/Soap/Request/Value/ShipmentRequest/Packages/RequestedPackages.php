<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Packages;

use Dhl\Express\Webservice\Soap\Request\Value\RequestedPackages as ValueRequestedPackages;
use Dhl\Express\Webservice\Soap\Request\Value\Money;
use Dhl\Express\Webservice\Soap\Request\Value\Dimensions;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Packages\RequestedPackages\CustomerReferences;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Packages\RequestedPackages\PackageContentDescription;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Packages\RequestedPackages\PieceIdentificationNumber;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\Packages\RequestedPackages\UseOwnPieceIdentificationNumber;

/**
 * A requested package.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RequestedPackages extends ValueRequestedPackages
{
    /**
     * The InsuredValue field is an optional field in the Packages section which will be deprecated from the
     * interface, as the SpecialServices section should be used to convey Insured Value.
     *
     * @var null|Money
     */
    private $InsuredValue;

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
     * The CustomerReferences field is used as the Piece Reference and the first instance is also used as
     * the Shipment Reference. Currently only the Shipment Reference appears on the label.
     *
     * @var CustomerReferences
     */
    private $CustomerReferences;

    /**
     * Constructor.
     *
     * @param float      $weight             The weight of the package
     * @param Dimensions $dimensions         The dimensions of the package
     * @param string     $customerReferences The customer references
     * @param int        $number             The package number
     */
    public function __construct(float $weight, Dimensions $dimensions, string $customerReferences, int $number)
    {
        parent::__construct($weight, $dimensions, $number);

        $this->setCustomerReferences($customerReferences);
    }

    /**
     * Returns the insurance value of the package.
     *
     * @return null|Money
     */
    public function getInsuredValue(): ?Money
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
    public function setInsuredValue(float $insuredValue): RequestedPackages
    {
        $this->InsuredValue = new Money($insuredValue);
        return $this;
    }

    /**
     * Returns the piece identification number.
     *
     * @return null|PieceIdentificationNumber
     */
    public function getPieceIdentificationNumber(): ?PieceIdentificationNumber
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
    public function setPieceIdentificationNumber(string $pieceIdentificationNumber): RequestedPackages
    {
        $this->PieceIdentificationNumber = new PieceIdentificationNumber($pieceIdentificationNumber);
        return $this;
    }

    /**
     * Returns whether to use own piece identification number or not.
     *
     * @return null|UseOwnPieceIdentificationNumber
     */
    public function getUseOwnPieceIdentificationNumber(): ?UseOwnPieceIdentificationNumber
    {
        return $this->UseOwnPieceIdentificationNumber;
    }

    /**
     * Sets whether to use own piece identification number or not.
     *
     * @param string $useOwnPieceIdentificationNumber Use own piece identification number or not (Y or N)
     *
     * @return RequestedPackages
     */
    public function setUseOwnPieceIdentificationNumber(string $useOwnPieceIdentificationNumber): RequestedPackages
    {
        $this->UseOwnPieceIdentificationNumber = new UseOwnPieceIdentificationNumber($useOwnPieceIdentificationNumber);
        return $this;
    }

    /**
     * Returns the package content description.
     *
     * @return null|PackageContentDescription
     */
    public function getPackageContentDescription(): ?PackageContentDescription
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
    public function setPackageContentDescription(string $packageContentDescription): RequestedPackages
    {
        $this->PackageContentDescription = new PackageContentDescription($packageContentDescription);
        return $this;
    }

    /**
     * Returns the customer references.
     *
     * @return CustomerReferences
     */
    public function getCustomerReferences(): CustomerReferences
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
    public function setCustomerReferences(string $customerReferences): RequestedPackages
    {
        $this->CustomerReferences = new CustomerReferences($customerReferences);
        return $this;
    }
}
