<?php

namespace Dhl\Express\Webservice\Soap\Type\ShipmentDelete;

class docTypeRef_NotificationType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var _x0040_code $code
     */
    protected $code = null;

    /**
     * @param Message $Message
     * @param _x0040_code $code
     */
    public function __construct($Message, $code)
    {
      $this->Message = $Message;
      $this->code = $code;
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
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_NotificationType
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return _x0040_code
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param _x0040_code $code
     * @return \Dhl\Express\Webservice\Soap\Type\ShipmentDelete\docTypeRef_NotificationType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
