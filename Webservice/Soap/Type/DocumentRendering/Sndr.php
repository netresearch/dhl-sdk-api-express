<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class Sndr
{

    /**
     * @var TAddr $TAddr
     */
    protected $TAddr;

    /**
     * @var string $AppCd
     */
    protected $AppCd;

    /**
     * @var anonymous5 $AppVer
     */
    protected $AppVer;

    /**
     * @var string $PrcsId
     */
    protected $PrcsId;

    /**
     * @var string $ThdId
     */
    protected $ThdId;

    /**
     * @param TAddr $TAddr
     * @param string $AppCd
     * @param anonymous5 $AppVer
     * @param string $PrcsId
     * @param string $ThdId
     */
    public function __construct($TAddr, $AppCd, $AppVer, $PrcsId, $ThdId)
    {
        $this->TAddr = $TAddr;
        $this->AppCd = $AppCd;
        $this->AppVer = $AppVer;
        $this->PrcsId = $PrcsId;
        $this->ThdId = $ThdId;
    }

    /**
     * @return TAddr
     */
    public function getTAddr()
    {
        return $this->TAddr;
    }

    /**
     * @param TAddr $TAddr
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr
     */
    public function setTAddr($TAddr)
    {
        $this->TAddr = $TAddr;
        return $this;
    }

    /**
     * @return string
     */
    public function getAppCd()
    {
        return $this->AppCd;
    }

    /**
     * @param string $AppCd
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr
     */
    public function setAppCd($AppCd)
    {
        $this->AppCd = $AppCd;
        return $this;
    }

    /**
     * @return anonymous5
     */
    public function getAppVer()
    {
        return $this->AppVer;
    }

    /**
     * @param anonymous5 $AppVer
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr
     */
    public function setAppVer($AppVer)
    {
        $this->AppVer = $AppVer;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrcsId()
    {
        return $this->PrcsId;
    }

    /**
     * @param string $PrcsId
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr
     */
    public function setPrcsId($PrcsId)
    {
        $this->PrcsId = $PrcsId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThdId()
    {
        return $this->ThdId;
    }

    /**
     * @param string $ThdId
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr
     */
    public function setThdId($ThdId)
    {
        $this->ThdId = $ThdId;
        return $this;
    }
}
