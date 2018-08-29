<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\Data\TrackingResponseInterface;
use Dhl\Express\Api\TrackingServiceInterface;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Exception\TrackingRequestException;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Dhl\Express\Webservice\Adapter\TrackingServiceAdapterInterface;
use Psr\Log\LoggerInterface;

/**
 * Tracking Service.
 *
 * Access the DHL Express Global Web Services tracking operations
 * "trackShipmentRequest"
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingService implements TrackingServiceInterface
{
    /**
     * @var TrackingServiceAdapterInterface
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * TrackingService constructor.
     *
     * @param TrackingServiceAdapterInterface $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        TrackingServiceAdapterInterface $adapter,
        LoggerInterface $logger
    ) {
        $this->adapter = $adapter;
        $this->logger = $logger;
    }

    /**
     * @param TrackingRequestInterface $request
     * @return TrackingResponseInterface
     * @throws SoapException
     * @throws TrackingRequestException
     */
    public function getTrackingInformation(TrackingRequestInterface $request)
    {
        try {
            $response = $this->adapter->getTrackingInformation($request);
        } catch (SoapException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (TrackingRequestException $e) {
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
