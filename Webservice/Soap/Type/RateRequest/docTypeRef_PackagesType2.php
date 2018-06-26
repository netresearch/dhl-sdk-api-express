<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_PackagesType2
{

    /**
     * @var docTypeRef_RequestedPackagesType2[] $RequestedPackages
     */
    protected $RequestedPackages = null;

    /**
     * @param docTypeRef_RequestedPackagesType2[] $RequestedPackages
     */
    public function __construct(array $RequestedPackages)
    {
      $this->RequestedPackages = $RequestedPackages;
    }

    /**
     * @return docTypeRef_RequestedPackagesType2[]
     */
    public function getRequestedPackages()
    {
      return $this->RequestedPackages;
    }

    /**
     * @param docTypeRef_RequestedPackagesType2[] $RequestedPackages
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_PackagesType2
     */
    public function setRequestedPackages(array $RequestedPackages)
    {
      $this->RequestedPackages = $RequestedPackages;
      return $this;
    }

}
