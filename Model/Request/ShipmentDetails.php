<?php
/**
 * See LICENSE.md for license details.
 */


namespace Dhl\Express\Model\Request;

use Dhl\Express\Api\Data\Request\ShipmentDetailsInterface;

/**
 * Shipment Details.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipmentDetails implements ShipmentDetailsInterface
{
    /**
     * @var bool
     */
    private $unscheduledPickup;

    /**
     * ShipmentDetails constructor.
     * @param bool $unscheduledPickup
     */
    public function __construct(bool $unscheduledPickup)
    {
        $this->unscheduledPickup = $unscheduledPickup;
    }

    public function isRegularPickup(): bool
    {
        return !$this->unscheduledPickup;
    }

    public function isUnscheduledPickup(): bool
    {
        return $this->unscheduledPickup;
    }
}
