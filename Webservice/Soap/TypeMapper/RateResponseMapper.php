<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\RateResponseInterface;
use Dhl\Express\Exception\RateRequestException;
use Dhl\Express\Model\RateResponse;
use Dhl\Express\Model\Response\Rate\Rate;
use Dhl\Express\Webservice\Soap\Type\SoapRateResponse;

/**
 * Rate Response Mapper.
 *
 * Transform the SOAP response type into rate objects suitable for further processing.
 *
 * @package  Dhl\Express\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class RateResponseMapper
{
    /**
     * @param SoapRateResponse $rateResponse
     * @return RateResponseInterface
     * @throws RateRequestException
     */
    public function map(SoapRateResponse $rateResponse): RateResponseInterface
    {
        $rates = [];

        foreach ($rateResponse->getProvider() as $provider) {
            if (\is_array($provider->getNotification())) {
                $error_message = '';
                foreach ($provider->getNotification() as $notification) {
                    if ($notification->getCode() !== 0) {
                        $error_message .= $notification->getMessage() . '\n';
                    }
                }
                if ($error_message !== '') {
                    throw new RateRequestException($error_message);
                }
            } else {
                if ($provider->getNotification()->getCode() !== 0) {
                    throw new RateRequestException($provider->getNotification()->getMessage());
                }
            }

            if ($provider->getService()) {
                foreach ($provider->getService() as $service) {
                    if ($service->getCharges() !== null) {
                        $charges = $service->getCharges()->getCharge();
                        $label = $charges[0]->getChargeType();
                    } else {
                        $label = 'DHL Express';
                    }
                    $totals       = $service->getTotalNet();
                    $currencyCode = $totals->getCurrency();
                    $serviceCode = $service->getType();
                    $cost        = $totals->getAmount();

                    $rate = new Rate($serviceCode, $label, $cost, $currencyCode);
                    $rates[] = $rate;
                }
            }
        }

        return new RateResponse($rates);
    }
}
