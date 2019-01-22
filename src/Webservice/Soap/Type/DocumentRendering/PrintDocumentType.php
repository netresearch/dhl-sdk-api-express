<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class PrintDocumentType
{

    /**
     * @var string $OutputFormat
     */
    protected $OutputFormat;

    /**
     * @var base64Binary $FileAttach
     */
    protected $FileAttach;

    /**
     * @var base64Binary $PrintCommand
     */
    protected $PrintCommand;

    /**
     * @param string $OutputFormat
     * @param base64Binary $FileAttach
     * @param base64Binary $PrintCommand
     */
    public function __construct($OutputFormat, $FileAttach, $PrintCommand)
    {
        $this->OutputFormat = $OutputFormat;
        $this->FileAttach = $FileAttach;
        $this->PrintCommand = $PrintCommand;
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\PrintDocumentType
     */
    public function setOutputFormat($OutputFormat)
    {
        $this->OutputFormat = $OutputFormat;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFileAttach()
    {
        return $this->FileAttach;
    }

    /**
     * @param base64Binary $FileAttach
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\PrintDocumentType
     */
    public function setFileAttach($FileAttach)
    {
        $this->FileAttach = $FileAttach;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPrintCommand()
    {
        return $this->PrintCommand;
    }

    /**
     * @param base64Binary $PrintCommand
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\PrintDocumentType
     */
    public function setPrintCommand($PrintCommand)
    {
        $this->PrintCommand = $PrintCommand;
        return $this;
    }
}
