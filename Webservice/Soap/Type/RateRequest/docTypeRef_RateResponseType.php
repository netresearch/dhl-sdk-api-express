<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_RateResponseType
{

    /**
     * @var docTypeRef_ProviderType[] $Provider
     */
    protected $Provider = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return docTypeRef_ProviderType[]
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param docTypeRef_ProviderType[] $Provider
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_RateResponseType
     */
    public function setProvider(array $Provider = null)
    {
      $this->Provider = $Provider;
      return $this;
    }

}
