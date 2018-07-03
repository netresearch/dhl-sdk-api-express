<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\DangerousGoods;

use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\DangerousGoods\Content\ContentId;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\DangerousGoods\Content\DryIceTotalNetWeight;
use Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\DangerousGoods\Content\UNCode;

/**
 * The dangerous goods content section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Content
{
    /**
     * Valid DHL Express Dangerous good content id (please contact your DHL Express IT representative for the
     * relevant content ID code if you are shipping Dangerous Goods).
     *
     * @var ContentId
     */
    protected $ContentID;

    /**
     * This is a numeric string with up to 7 char (i.e. 1000,00 or 1000.00).
     *
     * @var DryIceTotalNetWeight
     */
    protected $DryIceTotalNetWeight;

    /**
     * Comma separated UN codes – eg. “UN-7843268473”, “7843268473,123”.
     * 
     * @var UNCode
     */
    protected $UNCode;

    /**
     * Constructor.
     * 
     * @param string $contentId            The content id
     * @param string $dryIceTotalNetWeight The dry ice total net weight
     * @param string $unCode               The UN code
     */
    public function __construct($contentId, $dryIceTotalNetWeight, $unCode)
    {
      $this->setContentId($contentId)
        ->setDryIceTotalNetWeight($dryIceTotalNetWeight)
        ->setUNCode($unCode);
    }

    /**
     * Returns the content id.
     *
     * @return ContentId
     */
    public function getContentId(): ContentId
    {
        return $this->ContentID;
    }

    /**
     * Sets the content id.
     *
     * @param string $contentId The content id
     *
     * @return self
     */
    public function setContentId(string $contentId): Content
    {
        $this->ContentID = new ContentId($contentId);
        return $this;
    }

    /**
     * Returns the dry ice total net weight.
     *
     * @return DryIceTotalNetWeight
     */
    public function getDryIceTotalNetWeight(): DryIceTotalNetWeight
    {
        return $this->DryIceTotalNetWeight;
    }

    /**
     * Sets the dry ice total net weight.
     *
     * @param string $dryIceTotalNetWeight The dry ice total net weight
     *
     * @return self
     */
    public function setDryIceTotalNetWeight(string $dryIceTotalNetWeight): Content
    {
        $this->DryIceTotalNetWeight = new DryIceTotalNetWeight($dryIceTotalNetWeight);
        return $this;
    }

    /**
     * Returns the UN code.
     *
     * @return UNCode
     */
    public function getUNCode(): UNCode
    {
        return $this->UNCode;
    }

    /**
     * Sets the UN code.
     *
     * @param string $unCode The UN code
     *
     * @return self
     */
    public function setUNCode(string $unCode): Content
    {
        $this->UNCode = new UNCode($unCode);
        return $this;
    }
}
