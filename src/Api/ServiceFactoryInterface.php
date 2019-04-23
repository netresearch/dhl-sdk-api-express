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
 * @link     https://www.netresearch.de/
 */
interface ServiceFactoryInterface
{
    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param $sandpit
     *
     * @return RateServiceInterface
     */
    public function createRateService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    );

    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param $sandpit
     *
     * @return ShipmentServiceInterface
     */
    public function createShipmentService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    );

    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param $sandpit
     *
     * @return TrackingServiceInterface
     */
    public function createTrackingService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    );
}
