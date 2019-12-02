<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\AuthorizerName;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\DeliveryOption;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\GateCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\Instructions;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\Location;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\LWNTypeCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\NeighbourHouseNumber;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\NeighbourName;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\RequestedDeliveryDate;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\OnDemandDeliveryOptions\SelectedServicePointId;

/**
 * The OnDemandDeliveryOptions section conveys data elements for On Demand Delivery (ODD) service.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class OnDemandDeliveryOptions
{
    /**
     * The delivery option.
     *
     * @var DeliveryOption
     */
    private $DeliveryOption;

    /**
     * The location where exactly to leave the shipment.
     *
     * @var null|Location
     */
    private $Location;

    /**
     * Additional information that is useful for the DHL Express courier.
     *
     * @var null|Instructions
     */
    private $Instructions;

    /**
     * The entry code to gain access to an apartment complex or gate.
     *
     * @var null|GateCode
     */
    private $GateCode;

    /**
     * The LWN type code.
     *
     * @var null|LWNTypeCode
     */
    private $LWNTypeCode;

    /**
     * The neighbour name.
     *
     * @var null|NeighbourName
     */
    private $NeighbourName;

    /**
     * The neighbour house number.
     *
     * @var null|NeighbourHouseNumber
     */
    private $NeighbourHouseNumber;

    /**
     * The name of the authorized person.
     *
     * @var null|AuthorizerName
     */
    private $AuthorizerName;

    /**
     * The selected service point id.
     *
     * @var null|SelectedServicePointId
     */
    private $SelectedServicePointID;

    /**
     * The requested delivery date. Reserved for future use.
     *
     * @var null|RequestedDeliveryDate
     */
    private $RequestedDeliveryDate;

    /**
     * Constructor.
     *
     * @param string $deliveryOption         The delivery option
     * @param string $location               The location where exactly to leave the shipment
     * @param string $lwnTypeCode            The LWN type code
     * @param string $neighbourName          The neighbour name
     * @param string $neighbourHouseNumber   The neighbour house number
     * @param string $authorizerName         The name of the authorized person
     * @param string $selectedServicePointId The selected service point id
     */
    public function __construct(
        $deliveryOption,
        $location = null,
        $lwnTypeCode = null,
        $neighbourName = null,
        $neighbourHouseNumber = null,
        $authorizerName = null,
        $selectedServicePointId = null
    ) {
        $this->setDeliveryOption($deliveryOption);

        if ($deliveryOption === DeliveryOption::SX && empty($location)) {
            throw new \InvalidArgumentException('The location is required for selected delivery option');
        }

        if ($deliveryOption === DeliveryOption::SW) {
            if (empty($lwnTypeCode)) {
                throw new \InvalidArgumentException(
                    'The LWN type code is required for selected delivery option'
                );
            }

            if (($lwnTypeCode === LWNTypeCode::N) && empty($neighbourName)) {
                throw new \InvalidArgumentException(
                    'The neighbour name is required for LWN type code "' . LWNTypeCode::N . '"'
                );
            }

            if (($lwnTypeCode === LWNTypeCode::N) && empty($neighbourHouseNumber)) {
                throw new \InvalidArgumentException(
                    'The neighbour house number is required for LWN type code "' . LWNTypeCode::N . '"'
                );
            }
        }

        if (($deliveryOption === DeliveryOption::SW)
            || ($deliveryOption === DeliveryOption::SX)
        ) {
            if (empty($authorizerName)) {
                throw new \InvalidArgumentException('The name of the authorized person is required');
            }
        }

        if ($deliveryOption === DeliveryOption::TV && empty($selectedServicePointId)) {
            throw new \InvalidArgumentException(
                'The selected service point id is required for selected delivery option'
            );
        }
    }

    /**
     * Returns the delivery option.
     *
     * @return DeliveryOption
     */
    public function getDeliveryOption()
    {
        return $this->DeliveryOption;
    }

    /**
     * Sets the delivery option.
     *
     * @param string $deliveryOption The delivery option
     *
     * @return self
     */
    public function setDeliveryOption($deliveryOption)
    {
        $this->DeliveryOption = new DeliveryOption($deliveryOption);
        return $this;
    }

    /**
     * Returns the location.
     *
     * @return null|Location
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * Sets the location.
     *
     * @param string $location The location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->Location = new Location($location);
        return $this;
    }

    /**
     * Returns the instructions.
     *
     * @return null|Instructions
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * Sets the instructions.
     *
     * @param string $instructions The instructions
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->Instructions = new Instructions($instructions);
        return $this;
    }

    /**
     * Returns the gate code.
     *
     * @return null|GateCode
     */
    public function getGateCode()
    {
        return $this->GateCode;
    }

    /**
     * Sets the gate code.
     *
     * @param GateCode $gateCode The gate code
     *
     * @return self
     */
    public function setGateCode($gateCode)
    {
        $this->GateCode = new GateCode($gateCode);
        return $this;
    }

    /**
     * Returns the LWN type code.
     *
     * @return null|LWNTypeCode
     */
    public function getLWNTypeCode()
    {
        return $this->LWNTypeCode;
    }

    /**
     * Sets the LWN type code.
     *
     * @param string $lwnTypeCode The LWN type code
     *
     * @return self
     */
    public function setLWNTypeCode($lwnTypeCode)
    {
        $this->LWNTypeCode = new LWNTypeCode($lwnTypeCode);
        return $this;
    }

    /**
     * Returns the neighbour name.
     *
     * @return null|NeighbourName
     */
    public function getNeighbourName()
    {
        return $this->NeighbourName;
    }

    /**
     * Sets the neighbour name.
     *
     * @param string $neighbourName The neighbour name
     *
     * @return self
     */
    public function setNeighbourName($neighbourName)
    {
        $this->NeighbourName = new NeighbourName($neighbourName);
        return $this;
    }

    /**
     * Returns the neighbour house number.
     *
     * @return null|NeighbourHouseNumber
     */
    public function getNeighbourHouseNumber()
    {
        return $this->NeighbourHouseNumber;
    }

    /**
     * Sets the neighbour house number.
     *
     * @param string $neighbourHouseNumber The neighbour house number
     *
     * @return self
     */
    public function setNeighbourHouseNumber($neighbourHouseNumber)
    {
        $this->NeighbourHouseNumber = new NeighbourHouseNumber($neighbourHouseNumber);
        return $this;
    }

    /**
     * Returns the name of the authorized person.
     *
     * @return null|AuthorizerName
     */
    public function getAuthorizerName()
    {
        return $this->AuthorizerName;
    }

    /**
     * Sets the name of the authorized person.
     *
     * @param string $name The name of the authorized person
     *
     * @return self
     */
    public function setAuthorizerName($name)
    {
        $this->AuthorizerName = new AuthorizerName($name);
        return $this;
    }

    /**
     * Returns the selected service point id.
     *
     * @return null|SelectedServicePointId
     */
    public function getSelectedServicePointId()
    {
        return $this->SelectedServicePointID;
    }

    /**
     * Set the selected service point id.
     *
     * @param string $selectedServicePointId The selected service point id
     *
     * @return self
     */
    public function setSelectedServicePointId($selectedServicePointId)
    {
        $this->SelectedServicePointID = new SelectedServicePointId($selectedServicePointId);
        return $this;
    }

    /**
     * Returns the requested delivery date.
     *
     * @return null|RequestedDeliveryDate
     */
    public function getRequestedDeliveryDate()
    {
        return $this->RequestedDeliveryDate;
    }

    /**
     * Sets the requested delivery date.
     *
     * @param string $requestedDeliveryDate The requested delivery date
     *
     * @return self
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->RequestedDeliveryDate = new RequestedDeliveryDate($requestedDeliveryDate);
        return $this;
    }
}
