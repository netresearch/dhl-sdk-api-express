<?php

namespace Dhl\Express\Webservice\Soap\Type\RateRequest;

class docTypeRef_NotificationType3
{

    /**
     * @var Message2 $Message
     */
    protected $Message = null;

    /**
     * @var _x0040_code4 $code
     */
    protected $code = null;

    /**
     * @param Message2 $Message
     * @param _x0040_code4 $code
     */
    public function __construct($Message, $code)
    {
      $this->Message = $Message;
      $this->code = $code;
    }

    /**
     * @return Message2
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param Message2 $Message
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_NotificationType3
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return _x0040_code4
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param _x0040_code4 $code
     * @return \Dhl\Express\Webservice\Soap\Type\RateRequest\docTypeRef_NotificationType3
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
