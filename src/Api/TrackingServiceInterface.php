<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;

/**
 * Tracking Service Interface.
 *
 * Access the DHL Express Global Web Services shipment operation "TrackingRequest".
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface TrackingServiceInterface
{
    /**
     * @param TrackingRequestInterface $request
     * @return TrackingResponseInterface
     */
    public function getTrackingInformation(TrackingRequestInterface $request);
}
