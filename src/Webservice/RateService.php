<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice;

use Dhl\Express\Api\Data\RateRequestInterface;
use Dhl\Express\Api\RateServiceInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Exception\SoapException;
use Dhl\Express\Webservice\Soap\RateServiceAdapter;
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
     * @var RateServiceAdapter
     */
    private $adapter;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * RateService constructor.
     *
     * @param RateServiceAdapter $adapter
     * @param LoggerInterface $logger
     */
    public function __construct(
        RateServiceAdapter $adapter,
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

        $this->logger->debug($this->adapter->getLastRequest());
        $this->logger->debug($this->adapter->getLastResponse());

        return $response;
    }
}
