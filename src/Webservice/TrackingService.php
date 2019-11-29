<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\TrackingServiceInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Exception\TrackingRequestException;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Soap\TrackingServiceAdapter;
use Psr\Log\LoggerInterface;

/**
 * Tracking Service.
 *
 * Access the DHL Express Global Web Services tracking operations
 * "trackShipmentRequest"
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingService implements TrackingServiceInterface
{
    /**
     * @var TrackingServiceAdapter
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * TrackingService constructor.
     *
     * @param TrackingServiceAdapter $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        TrackingServiceAdapter $adapter,
        LoggerInterface $logger
    ) {
        $this->adapter = $adapter;
        $this->logger = $logger;
    }

    public function getTrackingInformation(TrackingRequestInterface $request)
    {
        try {
            $response = $this->adapter->getTrackingInformation($request);
        } catch (SoapException $e) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (TrackingRequestException $e) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->error($e->getMessage());
            throw $e;
        }

        if ($this->adapter instanceof TraceableInterface) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->debug($this->adapter->getLastResponse());
        }

        return $response;
    }
}
