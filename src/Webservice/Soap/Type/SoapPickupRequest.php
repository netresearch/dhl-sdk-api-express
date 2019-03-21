<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type;

use Dhl\Express\Webservice\Soap\Type\Pickup\ClientDetailType;
use Dhl\Express\Webservice\Soap\Type\Pickup\PickUpShipmentType;

/**
 * RequestPickUpType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class SoapPickupRequest
{
    /**
     * @var string
     */
    protected $MessageId;

    /**
     * @var ClientDetailType
     */
    protected $ClientDetail;

    /**
     * @var PickUpShipmentType
     */
    protected $PickUpShipment;

    /**
     * @param PickUpShipmentType $PickUpShipment
     */
    public function __construct(PickUpShipmentType $PickUpShipment)
    {
        $this->PickUpShipment = $PickUpShipment;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }

    /**
     * @param string $MessageId
     * @return self
     */
    public function setMessageId($MessageId)
    {
        $this->MessageId = $MessageId;
        return $this;
    }

    /**
     * @return ClientDetailType
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }

    /**
     * @param ClientDetailType $ClientDetail
     * @return self
     */
    public function setClientDetail(ClientDetailType $ClientDetail)
    {
        $this->ClientDetail = $ClientDetail;
        return $this;
    }

    /**
     * @return PickUpShipmentType
     */
    public function getPickUpShipment()
    {
        return $this->PickUpShipment;
    }

    /**
     * @param PickUpShipmentType $PickUpShipment
     * @return self
     */
    public function setPickUpShipment(PickUpShipmentType $PickUpShipment)
    {
        $this->PickUpShipment = $PickUpShipment;
        return $this;
    }
}
