<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_DimensionsType2
{

    /**
     * @var Length2 $Length
     */
    protected $Length = null;

    /**
     * @var Width2 $Width
     */
    protected $Width = null;

    /**
     * @var Height2 $Height
     */
    protected $Height = null;

    /**
     * @param Length2 $Length
     * @param Width2 $Width
     * @param Height2 $Height
     */
    public function __construct($Length, $Width, $Height)
    {
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
    }

    /**
     * @return Length2
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param Length2 $Length
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_DimensionsType2
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return Width2
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param Width2 $Width
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_DimensionsType2
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return Height2
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param Height2 $Height
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_DimensionsType2
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

}
