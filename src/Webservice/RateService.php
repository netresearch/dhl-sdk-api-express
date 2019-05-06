<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Adapter\RateServiceAdapterInterface;
use Dhl\Express\Webservice\Adapter\TraceableInterface;
use Psr\Log\LoggerInterface;

/**
 * Rate Service.
 *
 * Access the DHL Express Global Web Services rate operations
 * "RateRequest" and "RateDeleteRequest".
 *
 * @package  Dhl\Express\Webservice
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class RateService implements RateServiceInterface
{
    /**
     * @var RateServiceAdapterInterface|TraceableInterface
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * RateService constructor.
     *
     * @param RateServiceAdapterInterface $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        RateServiceAdapterInterface $adapter,
        LoggerInterface $logger
    ) {
        $this->adapter = $adapter;
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function collectRates(RateRequestInterface $request)
    {
        try {
            $response = $this->adapter->collectRates($request);
        } catch (SoapException $e) {
            $this->logger->debug($this->adapter->getLastRequest());
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (RateRequestException $e) {
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
