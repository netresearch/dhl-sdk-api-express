<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\Common\Billing;
use Dhl\Express\Webservice\Soap\Type\Common\CurrencyCode;
use Dhl\Express\Webservice\Soap\Type\Common\DropOffType;
use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\Common\UnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\Account;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\LabelTemplate;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\LabelType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\PackagesCount;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\ServiceType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\ShipmentIdentificationNumber;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\UseOwnShipmentIdentificationNumber;

/**
 * The ShipmentInfo section provides general shipment detail, pertaining to operational and billing features.
 * The Billing and Special Services sub-structures are detailed in below sections.
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class ShipmentInfo
{
    /**
     * The drop off type.
     *
     * @var DropOffType
     */
    private $DropOffType;

    /**
     * The shipping product requested for this shipment, corresponding to the DHL Global Product codes.
     *
     * @var ServiceType
     */
    private $ServiceType;

    /**
     * The customer account to be used as payer in the request. If the <Account> tag is used then there is no
     * need to populate the Billing section further down below in this table as the <Account> tag will override
     * any other accounts entered.
     *
     * However if you do wish to charge your shipment to a third party or receiver then please leave
     * the ACCOUNT section out and populate the Billing section below.
     *
     * @var null|Account
     */
    private $Account;

    /**
     * The billing section.
     *
     * @var null|Billing
     */
    private $Billing;

    /**
     * @var null|SpecialServices
     */
    private $SpecialServices;

    /**
     * The currency of the monetary values presented in the request.
     *
     * @var CurrencyCode
     */
    private $Currency;

    /**
     * The unit of measurement for the dimensions of the package.
     *
     * @var UnitOfMeasurement
     */
    private $UnitOfMeasurement;

    /**
     * The ShipmentIdentificationNumber should only be used if discussed with your DHL Express IT Consultant.
     * This field (when enabled by DHL Express) allows you to use your own DHL Express allocated Waybill number
     * range to be used – please note that the norm is to not use this field and each shipment will automatically
     * have its own Waybill number assigned when creating the shipment.
     *
     * @var null|ShipmentIdentificationNumber
     */
    private $ShipmentIdentificationNumber;

    /**
     * The UseOwnShipmentIdentificationNumber should only be used if discussed with your DHL Express IT Consultant.
     * This field (when enabled by DHL Express) allows you to use your own DHL Express allocated Waybill number
     * range to be used and tells the WebServices that you wish to provide your own Waybill number for each
     * shipment – please note that the norm is to not use this field and each shipment will automatically have its
     * own Waybill number assigned when creating the shipment.
     *
     * @var null|UseOwnShipmentIdentificationNumber
     */
    private $UseOwnShipmentIdentificationNumber;

    /**
     * Number of packages which need to be processed.
     *
     * @var null|PackagesCount
     */
    private $PackagesCount;

    /**
     * ???
     *
     * @var null|string
     */
    private $SendPackage;

    /**
     * The LabelType node conveys the label type used in the operation. It is an optional field. This single value
     * corresponds to the label type returned to customer. Customer can send one of the four values in this field
     * (PDF, ZPL, EPL, LP2). If customer did not include this tag, the default is PDF.
     *
     * @var null|LabelType
     */
    private $LabelType;

    /**
     * The LabelTemplate node conveys the label template used in the operation. It is an optional field. This single
     * value corresponds to the label template used to generate labels. – please check with your DHL Express IT
     * representative which templates meets your requirements. If this tag is not included, then the default of
     * ECOM26_84_001 will be used.
     *
     * @var null|LabelTemplate
     */
    private $LabelTemplate;

    /**
     * The LabelOptions node conveys additional label options. It is an optional field. Currently only
     * RequestWaybillDocument is supported and it takes a value of Y/N
     *
     * @var null|LabelOptions
     */
    private $LabelOptions;

    /**
     * The ArchiveLabelTemplate node conveys the label template used in the operation. It is an optional field.
     * This single value corresponds to the label template used to generate the Archive labels. Please check with
     * your DHL Express IT representative which templates meets your requirements. If this tag is not included, then
     * the default of ARCH_8x4 will be used.
     *
     * @var null|LabelTemplate
     */
    private $ArchiveLabelTemplate;

    /**
     * The PaperlessTradeEnabled node is an optional flag indicating if the request includes a Paperless
     * Trade image/document.
     *
     * @var null|bool
     */
    private $PaperlessTradeEnabled;

    /**
     * The PaperlessTradeImage node is for the base64 encoded string with the image of export documentation
     * (Commercial or Proforma Invoice). Allowed formats are JPEG, PDF (incl. multi-page), PNG. Maximum file
     * size is 1MB A4.
     *
     * @var null|string
     */
    private $PaperlessTradeImage;

    /**
     * Constructor.
     *
     * @param string $dropOffType       The drop off type
     * @param string $serviceType       The service type
     * @param string $currencyCode      The currency code
     * @param string $unitOfMeasurement The unit of measurement
     */
    public function __construct($dropOffType, $serviceType, $currencyCode, $unitOfMeasurement)
    {
        $this->setDropOffType($dropOffType)
          ->setServiceType($serviceType)
          ->setCurrency($currencyCode)
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
     * @param string $dropOffType The drop off type.
     *
     * @return self
     */
    public function setDropOffType($dropOffType)
    {
        $this->DropOffType = new DropOffType($dropOffType);
        return $this;
    }

    /**
     * Returns the service type.
     *
     * @return ServiceType
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * Sets the service type.
     *
     * @param string $serviceType The service type
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->ServiceType = new ServiceType($serviceType);
        return $this;
    }

    /**
     * Returns the account.
     *
     * @return null|Account
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * Sets the account.
     *
     * @param string $account The account
     *
     * @return self
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
     * Sets the billing section-
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
     * Returns the currency code.
     *
     * @return CurrencyCode
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the currency code.
     *
     * @param string $currencyCode The currency code.
     *
     * @return self
     */
    public function setCurrency($currencyCode)
    {
        $this->Currency = new CurrencyCode($currencyCode);
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
     * Returns the shipment identification number flag.
     *
     * @return null|ShipmentIdentificationNumber
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->ShipmentIdentificationNumber;
    }

    /**
     * Sets the shipment identification number flag.
     *
     * @param string $shipmentIdentificationNumber Whether to transmit the shipment identification number or not
     *
     * @return self
     */
    public function setShipmentIdentificationNumber($shipmentIdentificationNumber)
    {
        $this->ShipmentIdentificationNumber = new ShipmentIdentificationNumber($shipmentIdentificationNumber);
        return $this;
    }

    /**
     * Returns the use own shipment identification number flag.
     *
     * @return null|UseOwnShipmentIdentificationNumber
     */
    public function getUseOwnShipmentIdentificationNumber()
    {
        return $this->UseOwnShipmentIdentificationNumber;
    }

    /**
     * Sets the use own shipment identification number flag.
     *
     * @param string|bool $useOwnShipmentIdentificationNumber Whether to use own shipment identification number or not
     *                                                        (either Y/N or true/false)
     *
     * @return self
     */
    public function setUseOwnShipmentIdentificationNumber($useOwnShipmentIdentificationNumber)
    {
        $this->UseOwnShipmentIdentificationNumber = new UseOwnShipmentIdentificationNumber(
            $useOwnShipmentIdentificationNumber
        );

        return $this;
    }

    /**
     * Returns the number of packages which need to be processed.
     *
     * @return null|PackagesCount
     */
    public function getPackagesCount()
    {
        return $this->PackagesCount;
    }

    /**
     * Sets the number of packages which need to be processed.
     *
     * @param int $packagesCount The number of packages
     *
     * @return self
     */
    public function setPackagesCount($packagesCount)
    {
        $this->PackagesCount = new PackagesCount($packagesCount);
        return $this;
    }

    /**
     * Returns the send package value.
     *
     * @return null|string
     */
    public function getSendPackage()
    {
        return $this->SendPackage;
    }

    /**
     * Sets the send package value.
     *
     * @param string $sendPackage The send package value
     *
     * @return self
     */
    public function setSendPackage($sendPackage)
    {
        $this->SendPackage = $sendPackage;
        return $this;
    }

    /**
     * Returns the label type.
     *
     * @return null|LabelType
     */
    public function getLabelType()
    {
        return $this->LabelType;
    }

    /**
     * Sets the label type.
     *
     * @param string $labelType The label type
     *
     * @return self
     */
    public function setLabelType($labelType)
    {
        $this->LabelType = new LabelType($labelType);
        return $this;
    }

    /**
     * Returns the label template.
     *
     * @return null|LabelTemplate
     */
    public function getLabelTemplate()
    {
        return $this->LabelTemplate;
    }

    /**
     * Sets the label template.
     *
     * @param string $labelTemplate The label template
     *
     * @return self
     */
    public function setLabelTemplate($labelTemplate)
    {
        $this->LabelTemplate = new LabelTemplate($labelTemplate);
        return $this;
    }

    /**
     * Returns the archive label template.
     *
     * @return null|LabelTemplate
     */
    public function getArchiveLabelTemplate()
    {
        return $this->ArchiveLabelTemplate;
    }

    /**
     * Sets the archive label template.
     *
     * @param string $labelTemplate The archive label template
     *
     * @return self
     */
    public function setArchiveLabelTemplate($labelTemplate)
    {
        $this->ArchiveLabelTemplate = new LabelTemplate($labelTemplate);
        return $this;
    }

    /**
     * Returns whether paperless trade is enabled or not.
     *
     * @return null|bool
     */
    public function getPaperlessTradeEnabled()
    {
        return $this->PaperlessTradeEnabled;
    }

    /**
     * Sets whether paperless trade is enabled or not.
     *
     * @param bool $paperlessTradeEnabled Paperless trade flag
     *
     * @return self
     */
    public function setPaperlessTradeEnabled($paperlessTradeEnabled)
    {
        $this->PaperlessTradeEnabled = $paperlessTradeEnabled;
        return $this;
    }

    /**
     * Returns the paperless trade image.
     *
     * @return null|string
     */
    public function getPaperlessTradeImage()
    {
        return $this->PaperlessTradeImage;
    }

    /**
     * Sets the paperless trade image.
     *
     * @param string $paperlessTradeImage The paperless trade image
     *
     * @return self
     */
    public function setPaperlessTradeImage($paperlessTradeImage)
    {
        $this->PaperlessTradeImage = $paperlessTradeImage;
        return $this;
    }

    /**
     * Returns the label options.
     *
     * @return null|LabelOptions
     */
    public function getLabelOptions()
    {
        return $this->LabelOptions;
    }

    /**
     * Sets the label options.
     *
     * @param LabelOptions $labelOptions The label options
     *
     * @return self
     */
    public function setLabelOptions(LabelOptions $labelOptions)
    {
        $this->LabelOptions = $labelOptions;
        return $this;
    }

}
