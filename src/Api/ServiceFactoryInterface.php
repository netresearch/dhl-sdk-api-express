<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Exception\ExpressApiException;
use Dhl\Express\Exception\SoapException;
use Psr\Log\LoggerInterface;

/**
 * Service Factory Interface.
 *
 * Create a service object to access the DHL Express Global Web Services
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ServiceFactoryInterface
{
    /**
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandpit
     *
     * @return RateServiceInterface
     * @throws ExpressApiException
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
     * @param bool $sandpit
     *
     * @return ShipmentServiceInterface
     * @throws ExpressApiException
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
     * @param bool $sandpit
     *
     * @return TrackingServiceInterface
     * @throws ExpressApiException
     */
    public function createTrackingService(
        $username,
        $password,
        LoggerInterface $logger,
        $sandpit = false
    );
}
