<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class DocumentType
{

    /**
     * @var TemplateType[] $Template
     */
    protected $Template;

    /**
     * @var string $OutputFormat
     */
    protected $OutputFormat;

    /**
     * @var anonymous12 $FormDataType
     */
    protected $FormDataType;

    /**
     * @var int $PageNo
     */
    protected $PageNo;

    /**
     * @var int $Height
     */
    protected $Height;

    /**
     * @var int $Width
     */
    protected $Width;

    /**
     * @var int $MarginLeft
     */
    protected $MarginLeft;

    /**
     * @var int $MarginTop
     */
    protected $MarginTop;

    /**
     * @var int $MarginBottom
     */
    protected $MarginBottom;

    /**
     * @var int $MarginRight
     */
    protected $MarginRight;

    /**
     * @var base64Binary $PreloadPro
     */
    protected $PreloadPro;

    /**
     * @var base64Binary $PreloadEpli
     */
    protected $PreloadEpli;

    /**
     * @var base64Binary $PrintPro
     */
    protected $PrintPro;

    /**
     * @var base64Binary $PrintEpli
     */
    protected $PrintEpli;

    /**
     * @var base64Binary $PrintPgPro
     */
    protected $PrintPgPro;

    /**
     * @var base64Binary $PrintPgEpli
     */
    protected $PrintPgEpli;

    /**
     * @var int $ResolutionX
     */
    protected $ResolutionX;

    /**
     * @var int $ResolutionY
     */
    protected $ResolutionY;

    /**
     * @param TemplateType[] $Template
     * @param string $OutputFormat
     * @param anonymous12 $FormDataType
     * @param int $PageNo
     * @param int $Height
     * @param int $Width
     * @param int $MarginLeft
     * @param int $MarginTop
     * @param int $MarginBottom
     * @param int $MarginRight
     * @param base64Binary $PreloadPro
     * @param base64Binary $PreloadEpli
     * @param base64Binary $PrintPro
     * @param base64Binary $PrintEpli
     * @param base64Binary $PrintPgPro
     * @param base64Binary $PrintPgEpli
     * @param int $ResolutionX
     * @param int $ResolutionY
     */
    public function __construct(array $Template, $OutputFormat, $FormDataType, $PageNo, $Height, $Width, $MarginLeft, $MarginTop, $MarginBottom, $MarginRight, $PreloadPro, $PreloadEpli, $PrintPro, $PrintEpli, $PrintPgPro, $PrintPgEpli, $ResolutionX, $ResolutionY)
    {
        $this->Template = $Template;
        $this->OutputFormat = $OutputFormat;
        $this->FormDataType = $FormDataType;
        $this->PageNo = $PageNo;
        $this->Height = $Height;
        $this->Width = $Width;
        $this->MarginLeft = $MarginLeft;
        $this->MarginTop = $MarginTop;
        $this->MarginBottom = $MarginBottom;
        $this->MarginRight = $MarginRight;
        $this->PreloadPro = $PreloadPro;
        $this->PreloadEpli = $PreloadEpli;
        $this->PrintPro = $PrintPro;
        $this->PrintEpli = $PrintEpli;
        $this->PrintPgPro = $PrintPgPro;
        $this->PrintPgEpli = $PrintPgEpli;
        $this->ResolutionX = $ResolutionX;
        $this->ResolutionY = $ResolutionY;
    }

    /**
     * @return TemplateType[]
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     * @param TemplateType[] $Template
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setTemplate(array $Template)
    {
        $this->Template = $Template;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutputFormat()
    {
        return $this->OutputFormat;
    }

    /**
     * @param string $OutputFormat
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setOutputFormat($OutputFormat)
    {
        $this->OutputFormat = $OutputFormat;
        return $this;
    }

    /**
     * @return anonymous12
     */
    public function getFormDataType()
    {
        return $this->FormDataType;
    }

    /**
     * @param anonymous12 $FormDataType
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setFormDataType($FormDataType)
    {
        $this->FormDataType = $FormDataType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNo()
    {
        return (int) $this->PageNo;
    }

    /**
     * @param int $PageNo
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPageNo($PageNo)
    {
        $this->PageNo = $PageNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return (int) $this->Height;
    }

    /**
     * @param int $Height
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return (int) $this->Width;
    }

    /**
     * @param int $Width
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarginLeft()
    {
        return (int) $this->MarginLeft;
    }

    /**
     * @param int $MarginLeft
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setMarginLeft($MarginLeft)
    {
        $this->MarginLeft = $MarginLeft;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarginTop()
    {
        return (int) $this->MarginTop;
    }

    /**
     * @param int $MarginTop
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setMarginTop($MarginTop)
    {
        $this->MarginTop = $MarginTop;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarginBottom()
    {
        return (int) $this->MarginBottom;
    }

    /**
     * @param int $MarginBottom
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setMarginBottom($MarginBottom)
    {
        $this->MarginBottom = $MarginBottom;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarginRight()
    {
        return (int) $this->MarginRight;
    }

    /**
     * @param int $MarginRight
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setMarginRight($MarginRight)
    {
        $this->MarginRight = $MarginRight;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPreloadPro()
    {
        return $this->PreloadPro;
    }

    /**
     * @param base64Binary $PreloadPro
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPreloadPro($PreloadPro)
    {
        $this->PreloadPro = $PreloadPro;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPreloadEpli()
    {
        return $this->PreloadEpli;
    }

    /**
     * @param base64Binary $PreloadEpli
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPreloadEpli($PreloadEpli)
    {
        $this->PreloadEpli = $PreloadEpli;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPrintPro()
    {
        return $this->PrintPro;
    }

    /**
     * @param base64Binary $PrintPro
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPrintPro($PrintPro)
    {
        $this->PrintPro = $PrintPro;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPrintEpli()
    {
        return $this->PrintEpli;
    }

    /**
     * @param base64Binary $PrintEpli
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPrintEpli($PrintEpli)
    {
        $this->PrintEpli = $PrintEpli;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPrintPgPro()
    {
        return $this->PrintPgPro;
    }

    /**
     * @param base64Binary $PrintPgPro
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPrintPgPro($PrintPgPro)
    {
        $this->PrintPgPro = $PrintPgPro;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPrintPgEpli()
    {
        return $this->PrintPgEpli;
    }

    /**
     * @param base64Binary $PrintPgEpli
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setPrintPgEpli($PrintPgEpli)
    {
        $this->PrintPgEpli = $PrintPgEpli;
        return $this;
    }

    /**
     * @return int
     */
    public function getResolutionX()
    {
        return (int) $this->ResolutionX;
    }

    /**
     * @param int $ResolutionX
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setResolutionX($ResolutionX)
    {
        $this->ResolutionX = $ResolutionX;
        return $this;
    }

    /**
     * @return int
     */
    public function getResolutionY()
    {
        return (int) $this->ResolutionY;
    }

    /**
     * @param int $ResolutionY
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType
     */
    public function setResolutionY($ResolutionY)
    {
        $this->ResolutionY = $ResolutionY;
        return $this;
    }
}
