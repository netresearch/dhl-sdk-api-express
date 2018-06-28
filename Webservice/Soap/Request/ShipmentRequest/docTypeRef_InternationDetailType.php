<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_InternationDetailType
{

    /**
     * @var docTypeRef_CommoditiesType $Commodities
     */
    protected $Commodities = null;

    /**
     * @var Content $Content
     */
    protected $Content = null;

    /**
     * @var ExportReference $ExportReference
     */
    protected $ExportReference = null;

    /**
     * @param docTypeRef_CommoditiesType $Commodities
     */
    public function __construct($Commodities)
    {
      $this->Commodities = $Commodities;
    }

    /**
     * @return docTypeRef_CommoditiesType
     */
    public function getCommodities()
    {
      return $this->Commodities;
    }

    /**
     * @param docTypeRef_CommoditiesType $Commodities
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_InternationDetailType
     */
    public function setCommodities($Commodities)
    {
      $this->Commodities = $Commodities;
      return $this;
    }

    /**
     * @return Content
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param Content $Content
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_InternationDetailType
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return ExportReference
     */
    public function getExportReference()
    {
      return $this->ExportReference;
    }

    /**
     * @param ExportReference $ExportReference
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_InternationDetailType
     */
    public function setExportReference($ExportReference)
    {
      $this->ExportReference = $ExportReference;
      return $this;
    }

}
