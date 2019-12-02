<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Exception\TrackingRequestException;

/**
 * Tracking Service Interface.
 *
 * Access the DHL Express Global Web Services shipment operation "TrackingRequest".
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface TrackingServiceInterface
{
    /**
     * @param TrackingRequestInterface $request
     *
     * @return TrackingResponseInterface
     *
     * @throws SoapException
     * @throws TrackingRequestException
     */
    public function getTrackingInformation(TrackingRequestInterface $request);
}
