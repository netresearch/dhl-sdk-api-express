<?php

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

class docTypeRef_PackagesType
{

    /**
     * @var docTypeRef_RequestedPackagesType $RequestedPackages
     */
    protected $RequestedPackages;

    /**
     * @param docTypeRef_RequestedPackagesType $RequestedPackages
     */
    public function __construct($RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
    }

    /**
     * @return docTypeRef_RequestedPackagesType
     */
    public function getRequestedPackages()
    {
        return $this->RequestedPackages;
    }

    /**
     * @param docTypeRef_RequestedPackagesType $RequestedPackages
     * @return \Dhl\Express\Webservice\Soap\Type\Pickup\docTypeRef_PackagesType
     */
    public function setRequestedPackages($RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
        return $this;
    }
}
