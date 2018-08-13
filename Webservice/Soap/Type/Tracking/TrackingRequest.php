<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * The tracking request.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
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
     * @param string $LevelOfDetails
     */
    public function __construct(Request $Request, string $LevelOfDetails)
    {
        $this->Request = $Request;
        $this->LevelOfDetails = $LevelOfDetails;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->Request;
    }

    /**
     * @param Request $Request
     * @return self
     */
    public function setRequest(Request $Request): self
    {
        $this->Request = $Request;

        return $this;
    }

    /**
     * @return AWBNumberCollection
     */
    public function getAWBNumber(): AWBNumberCollection
    {
        return $this->AWBNumber;
    }

    /**
     * @param AWBNumberCollection $AWBNumber
     * @return self
     */
    public function setAWBNumber(AWBNumberCollection $AWBNumber): self
    {
        $this->AWBNumber = $AWBNumber;

        return $this;
    }

    /**
     * @return TrackingPieceIDCollection
     */
    public function getLPNumber(): TrackingPieceIDCollection
    {
        return $this->LPNumber;
    }

    /**
     * @param TrackingPieceIDCollection $LPNumber
     * @return self
     */
    public function setLPNumber(TrackingPieceIDCollection $LPNumber): self
    {
        $this->LPNumber = $LPNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevelOfDetails(): string
    {
        return $this->LevelOfDetails;
    }

    /**
     * @param string $LevelOfDetails
     * @return self
     */
    public function setLevelOfDetails(string $LevelOfDetails): self
    {
        $this->LevelOfDetails = $LevelOfDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getPiecesEnabled(): string
    {
        return $this->PiecesEnabled;
    }

    /**
     * @param string $PiecesEnabled
     * @return self
     */
    public function setPiecesEnabled(string $PiecesEnabled): self
    {
        $this->PiecesEnabled = $PiecesEnabled;

        return $this;
    }

    /**
     * @return bool
     */
    public function getEstimatedDeliveryDateEnabled(): bool
    {
        return $this->EstimatedDeliveryDateEnabled;
    }

    /**
     * @param bool $EstimatedDeliveryDateEnabled
     * @return self
     */
    public function setEstimatedDeliveryDateEnabled(bool $EstimatedDeliveryDateEnabled): self
    {
        $this->EstimatedDeliveryDateEnabled = $EstimatedDeliveryDateEnabled;

        return $this;
    }
}
