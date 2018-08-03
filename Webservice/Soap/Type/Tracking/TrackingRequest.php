<?php

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

class TrackingRequest
{

    /**
     * @var Request $Request
     */
    protected $Request = null;

    /**
     * @var ArrayOfAWBNumber $AWBNumber
     */
    protected $AWBNumber = null;

    /**
     * @var ArrayOfTrackingPieceID $LPNumber
     */
    protected $LPNumber = null;

    /**
     * @var LevelOfDetails $LevelOfDetails
     */
    protected $LevelOfDetails = null;

    /**
     * @var string $PiecesEnabled
     */
    protected $PiecesEnabled = null;

    /**
     * @var boolean $EstimatedDeliveryDateEnabled
     */
    protected $EstimatedDeliveryDateEnabled = null;

    /**
     * @param Request $Request
     * @param LevelOfDetails $LevelOfDetails
     */
    public function __construct($Request, $LevelOfDetails)
    {
      $this->Request = $Request;
      $this->LevelOfDetails = $LevelOfDetails;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
      return $this->Request;
    }

    /**
     * @param Request $Request
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest
     */
    public function setRequest($Request)
    {
      $this->Request = $Request;
      return $this;
    }

    /**
     * @return ArrayOfAWBNumber
     */
    public function getAWBNumber()
    {
      return $this->AWBNumber;
    }

    /**
     * @param ArrayOfAWBNumber $AWBNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest
     */
    public function setAWBNumber($AWBNumber)
    {
      $this->AWBNumber = $AWBNumber;
      return $this;
    }

    /**
     * @return ArrayOfTrackingPieceID
     */
    public function getLPNumber()
    {
      return $this->LPNumber;
    }

    /**
     * @param ArrayOfTrackingPieceID $LPNumber
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest
     */
    public function setLPNumber($LPNumber)
    {
      $this->LPNumber = $LPNumber;
      return $this;
    }

    /**
     * @return LevelOfDetails
     */
    public function getLevelOfDetails()
    {
      return $this->LevelOfDetails;
    }

    /**
     * @param LevelOfDetails $LevelOfDetails
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest
     */
    public function setLevelOfDetails($LevelOfDetails)
    {
      $this->LevelOfDetails = $LevelOfDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getPiecesEnabled()
    {
      return $this->PiecesEnabled;
    }

    /**
     * @param string $PiecesEnabled
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest
     */
    public function setPiecesEnabled($PiecesEnabled)
    {
      $this->PiecesEnabled = $PiecesEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEstimatedDeliveryDateEnabled()
    {
      return $this->EstimatedDeliveryDateEnabled;
    }

    /**
     * @param boolean $EstimatedDeliveryDateEnabled
     * @return \Dhl\Express\Webservice\Soap\Type\Tracking\TrackingRequest
     */
    public function setEstimatedDeliveryDateEnabled($EstimatedDeliveryDateEnabled)
    {
      $this->EstimatedDeliveryDateEnabled = $EstimatedDeliveryDateEnabled;
      return $this;
    }

}
