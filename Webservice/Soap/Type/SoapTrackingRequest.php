<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Tracking\AWBNumberCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\TrackingPieceIDCollection;
use Dhl\Express\Webservice\Soap\Type\Tracking\LevelOfDetails;
use Dhl\Express\Webservice\Soap\Type\Tracking\Request;

/**
 * The tracking request.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class SoapTrackingRequest
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
     * @var LevelOfDetails
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
     * @param LevelOfDetails $LevelOfDetails
     */
    public function __construct(Request $Request, LevelOfDetails $LevelOfDetails)
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
     * @return LevelOfDetails
     */
    public function getLevelOfDetails(): LevelOfDetails
    {
        return $this->LevelOfDetails;
    }

    /**
     * @param LevelOfDetails $LevelOfDetails
     * @return self
     */
    public function setLevelOfDetails(LevelOfDetails $LevelOfDetails): self
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
