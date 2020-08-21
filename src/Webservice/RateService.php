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

    public function collectRates(RateRequestInterface $request)
    {
        try {
            $response = $this->adapter->collectRates($request);
        } catch (SoapException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } catch (RateRequestException $e) {
            $this->logger->error($e->getMessage());
            throw $e;
        } finally {
            $this->logger->debug('SOAP REQUEST' . PHP_EOL . $this->adapter->getLastRequest());
            if (trim($this->adapter->getLastResponse())) {
                $this->logger->debug('SOAP RESPONSE' . PHP_EOL . $this->adapter->getLastResponse());
            }
        }

        return $response;
    }
}
