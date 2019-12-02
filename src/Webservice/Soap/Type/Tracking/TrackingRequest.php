<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * The tracking request.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingRequest
{
    /**
     * @var Request $Request
     */
    protected $Request;

    /**
     * @var AWBNumberCollection
     */
    protected $AWBNumber;

    /**
     * @var TrackingPieceIDCollection
     */
    protected $LPNumber;

    /**
     * @var string
     */
    protected $LevelOfDetails;

    /**
     * @var string
     */
    protected $PiecesEnabled;

    /**
     * @var boolean
     */
    protected $EstimatedDeliveryDateEnabled;

    /**
     * @param Request $Request
     * @param string  $LevelOfDetails
     */
    public function __construct(Request $Request, $LevelOfDetails)
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
     * @return self
     */
    public function setRequest(Request $Request)
    {
        $this->Request = $Request;

        return $this;
    }

    /**
     * @return AWBNumberCollection
     */
    public function getAWBNumber()
    {
        return $this->AWBNumber;
    }

    /**
     * @param AWBNumberCollection $AWBNumber
     * @return self
     */
    public function setAWBNumber(AWBNumberCollection $AWBNumber)
    {
        $this->AWBNumber = $AWBNumber;

        return $this;
    }

    /**
     * @return TrackingPieceIDCollection
     */
    public function getLPNumber()
    {
        return $this->LPNumber;
    }

    /**
     * @param TrackingPieceIDCollection $LPNumber
     * @return self
     */
    public function setLPNumber(TrackingPieceIDCollection $LPNumber)
    {
        $this->LPNumber = $LPNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevelOfDetails()
    {
        return $this->LevelOfDetails;
    }

    /**
     * @param string $LevelOfDetails
     *
     * @return self
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
     * @return self
     */
    public function setPiecesEnabled($PiecesEnabled)
    {
        $this->PiecesEnabled = $PiecesEnabled;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEstimatedDeliveryDateEnabled()
    {
        return $this->EstimatedDeliveryDateEnabled;
    }

    /**
     * @param bool $EstimatedDeliveryDateEnabled
     * @return self
     */
    public function setEstimatedDeliveryDateEnabled($EstimatedDeliveryDateEnabled)
    {
        $this->EstimatedDeliveryDateEnabled = $EstimatedDeliveryDateEnabled;

        return $this;
    }
}
