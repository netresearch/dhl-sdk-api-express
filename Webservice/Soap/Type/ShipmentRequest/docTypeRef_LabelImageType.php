<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

class docTypeRef_LabelImageType
{

    /**
     * @var LabelImageFormat $LabelImageFormat
     */
    protected $LabelImageFormat = null;

    /**
     * @var base64Binary $GraphicImage
     */
    protected $GraphicImage = null;

    /**
     * @var base64Binary $HTMLImage
     */
    protected $HTMLImage = null;

    /**
     * @param LabelImageFormat $LabelImageFormat
     * @param base64Binary $GraphicImage
     */
    public function __construct($LabelImageFormat, $GraphicImage)
    {
      $this->LabelImageFormat = $LabelImageFormat;
      $this->GraphicImage = $GraphicImage;
    }

    /**
     * @return LabelImageFormat
     */
    public function getLabelImageFormat()
    {
      return $this->LabelImageFormat;
    }

    /**
     * @param LabelImageFormat $LabelImageFormat
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_LabelImageType
     */
    public function setLabelImageFormat($LabelImageFormat)
    {
      $this->LabelImageFormat = $LabelImageFormat;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getGraphicImage()
    {
      return $this->GraphicImage;
    }

    /**
     * @param base64Binary $GraphicImage
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_LabelImageType
     */
    public function setGraphicImage($GraphicImage)
    {
      $this->GraphicImage = $GraphicImage;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getHTMLImage()
    {
      return $this->HTMLImage;
    }

    /**
     * @param base64Binary $HTMLImage
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentRequest\docTypeRef_LabelImageType
     */
    public function setHTMLImage($HTMLImage)
    {
      $this->HTMLImage = $HTMLImage;
      return $this;
    }

}
