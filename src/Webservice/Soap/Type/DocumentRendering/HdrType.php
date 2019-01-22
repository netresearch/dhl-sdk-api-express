<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class HdrType
{

    /**
     * @var Sndr $Sndr
     */
    protected $Sndr;

    /**
     * @var anonymous6 $No
     */
    protected $No;

    /**
     * @var anonymous7 $Id
     */
    protected $Id;

    /**
     * @var anonymous8 $Ver
     */
    protected $Ver;

    /**
     * @var UNKNOWN $Dtm
     */
    protected $Dtm;

    /**
     * @var UNKNOWN $GmtOff
     */
    protected $GmtOff;

    /**
     * @var anonymous9 $Srv
     */
    protected $Srv;

    /**
     * @var anonymous10 $CorrId
     */
    protected $CorrId;

    /**
     * @param anonymous6 $No
     * @param anonymous7 $Id
     * @param anonymous8 $Ver
     * @param UNKNOWN $Dtm
     * @param UNKNOWN $GmtOff
     * @param anonymous9 $Srv
     * @param anonymous10 $CorrId
     */
    public function __construct($No, $Id, $Ver, $Dtm, $GmtOff, $Srv, $CorrId)
    {
        $this->No = $No;
        $this->Id = $Id;
        $this->Ver = $Ver;
        $this->Dtm = $Dtm;
        $this->GmtOff = $GmtOff;
        $this->Srv = $Srv;
        $this->CorrId = $CorrId;
    }

    /**
     * @return Sndr
     */
    public function getSndr()
    {
        return $this->Sndr;
    }

    /**
     * @param Sndr $Sndr
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setSndr($Sndr)
    {
        $this->Sndr = $Sndr;
        return $this;
    }

    /**
     * @return anonymous6
     */
    public function getNo()
    {
        return $this->No;
    }

    /**
     * @param anonymous6 $No
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setNo($No)
    {
        $this->No = $No;
        return $this;
    }

    /**
     * @return anonymous7
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param anonymous7 $Id
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return anonymous8
     */
    public function getVer()
    {
        return $this->Ver;
    }

    /**
     * @param anonymous8 $Ver
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setVer($Ver)
    {
        $this->Ver = $Ver;
        return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getDtm()
    {
        return $this->Dtm;
    }

    /**
     * @param UNKNOWN $Dtm
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setDtm($Dtm)
    {
        $this->Dtm = $Dtm;
        return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getGmtOff()
    {
        return $this->GmtOff;
    }

    /**
     * @param UNKNOWN $GmtOff
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setGmtOff($GmtOff)
    {
        $this->GmtOff = $GmtOff;
        return $this;
    }

    /**
     * @return anonymous9
     */
    public function getSrv()
    {
        return $this->Srv;
    }

    /**
     * @param anonymous9 $Srv
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setSrv($Srv)
    {
        $this->Srv = $Srv;
        return $this;
    }

    /**
     * @return anonymous10
     */
    public function getCorrId()
    {
        return $this->CorrId;
    }

    /**
     * @param anonymous10 $CorrId
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType
     */
    public function setCorrId($CorrId)
    {
        $this->CorrId = $CorrId;
        return $this;
    }
}
