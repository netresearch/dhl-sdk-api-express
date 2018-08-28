<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class GLSDocResponse
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
     * @var Message $Message
     */
    protected $Message;

    /**
     * @var DataType $Data
     */
    protected $Data;

    /**
     * @var DocumentType $Document
     */
    protected $Document;

    /**
     * @var PrintDocumentType $PrintDocument
     */
    protected $PrintDocument;

    /**
     * @var anonymous24 $Status
     */
    protected $Status;

    /**
     * @param HdrType $Hdr
     * @param CommandType $Command
     * @param Message $Message
     * @param DataType $Data
     * @param DocumentType $Document
     * @param PrintDocumentType $PrintDocument
     * @param anonymous24 $Status
     */
    public function __construct($Hdr, $Command, $Message, $Data, $Document, $PrintDocument, $Status)
    {
        $this->Hdr = $Hdr;
        $this->Command = $Command;
        $this->Message = $Message;
        $this->Data = $Data;
        $this->Document = $Document;
        $this->PrintDocument = $PrintDocument;
        $this->Status = $Status;
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
     */
    public function setCommand($Command)
    {
        $this->Command = $Command;
        return $this;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
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
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
     */
    public function setDocument($Document)
    {
        $this->Document = $Document;
        return $this;
    }

    /**
     * @return PrintDocumentType
     */
    public function getPrintDocument()
    {
        return $this->PrintDocument;
    }

    /**
     * @param PrintDocumentType $PrintDocument
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
     */
    public function setPrintDocument($PrintDocument)
    {
        $this->PrintDocument = $PrintDocument;
        return $this;
    }

    /**
     * @return anonymous24
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param anonymous24 $Status
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }
}
