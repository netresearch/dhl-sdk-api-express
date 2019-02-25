<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class TAddr
{

    /**
     * @var anonymous3 $TAddr
     */
    protected $TAddr;

    /**
     * @var anonymous4 $TAddrTy
     */
    protected $TAddrTy;

    /**
     * @param anonymous3 $TAddr
     * @param anonymous4 $TAddrTy
     */
    public function __construct($TAddr, $TAddrTy)
    {
        $this->TAddr = $TAddr;
        $this->TAddrTy = $TAddrTy;
    }

    /**
     * @return anonymous3
     */
    public function getTAddr()
    {
        return $this->TAddr;
    }

    /**
     * @param anonymous3 $TAddr
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\TAddr
     */
    public function setTAddr($TAddr)
    {
        $this->TAddr = $TAddr;
        return $this;
    }

    /**
     * @return anonymous4
     */
    public function getTAddrTy()
    {
        return $this->TAddrTy;
    }

    /**
     * @param anonymous4 $TAddrTy
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\TAddr
     */
    public function setTAddrTy($TAddrTy)
    {
        $this->TAddrTy = $TAddrTy;
        return $this;
    }
}
