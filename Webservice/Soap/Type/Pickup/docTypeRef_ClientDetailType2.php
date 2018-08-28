<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_ClientDetailType2
{

    /**
     * @var sso $sso
     */
    protected $sso;

    /**
     * @var plant $plant
     */
    protected $plant;


    public function __construct()
    {
    }

    /**
     * @return sso
     */
    public function getSso()
    {
        return $this->sso;
    }

    /**
     * @param sso $sso
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ClientDetailType2
     */
    public function setSso($sso)
    {
        $this->sso = $sso;
        return $this;
    }

    /**
     * @return plant
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * @param plant $plant
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_ClientDetailType2
     */
    public function setPlant($plant)
    {
        $this->plant = $plant;
        return $this;
    }
}
