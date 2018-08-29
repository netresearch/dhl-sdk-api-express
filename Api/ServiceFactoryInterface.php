<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Psr\Log\LoggerInterface;

/**
 * Service Factory Interface.
 *
 * Create a service object to access the DHL Express Global Web Services
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ServiceFactoryInterface
{
    /**
     * @param string          $username
     * @param string          $password
     * @param LoggerInterface $logger
     *
     * @return RateServiceInterface
     */
    public function createRateService(
        $username,
        $password,
        LoggerInterface $logger
    );

    /**
     * @param string          $username
     * @param string          $password
     * @param LoggerInterface $logger
     * @return ShipmentServiceInterface
     */
    public function createShipmentService(
        $username,
        $password,
        LoggerInterface $logger
    );

    /**
     * @param string          $username
     * @param string          $password
     * @param LoggerInterface $logger
     * @return TrackingServiceInterface
     */
    public function createTrackingService(
        $username,
        $password,
        LoggerInterface $logger
    );

    /**
     * @return PickupServiceInterface
     */
    public function createPickupService();
}
