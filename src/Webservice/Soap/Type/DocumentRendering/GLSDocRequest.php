<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class GLSDocRequest
{

    /**
     * @var HdrType $Hdr
     */
    protected $Hdr;

    /**
     * @var CommandType $Command
     */
    protected $Command;

    /**
     * @var DataType $Data
     */
    protected $Data;

    /**
     * @var DocumentType $Document
     */
    protected $Document;

    /**
     * @param HdrType $Hdr
     * @param CommandType $Command
     * @param DataType $Data
     * @param DocumentType $Document
     */
    public function __construct($Hdr, $Command, $Data, $Document)
    {
        $this->Hdr = $Hdr;
        $this->Command = $Command;
        $this->Data = $Data;
        $this->Document = $Document;
    }

    /**
     * @return HdrType
     */
    public function getHdr()
    {
        return $this->Hdr;
    }

    /**
     * @param HdrType $Hdr
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocRequest
     */
    public function setHdr($Hdr)
    {
        $this->Hdr = $Hdr;
        return $this;
    }

    /**
     * @return CommandType
     */
    public function getCommand()
    {
        return $this->Command;
    }

    /**
     * @param CommandType $Command
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocRequest
     */
    public function setCommand($Command)
    {
        $this->Command = $Command;
        return $this;
    }

    /**
     * @return DataType
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param DataType $Data
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocRequest
     */
    public function setData($Data)
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return DocumentType
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * @param DocumentType $Document
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocRequest
     */
    public function setDocument($Document)
    {
        $this->Document = $Document;
        return $this;
    }
}
