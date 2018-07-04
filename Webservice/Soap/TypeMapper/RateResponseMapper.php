<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\TypeMapper;

use Dhl\Express\Api\Data\RateResponseInterface;

use Dhl\Express\Webservice\Soap\Response\RateResponse;

/**
 * Rate Request Mapper.
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
     * @param RateResponse $rateResponse
     *
     * @return RateResponseInterface
     */
    public function map(RateResponse $rateResponse)
    {
        $rates = [];

        foreach ($rateResponse->getProvider() as $provider) {
            foreach ($provider->getService() as $service) {
                $charges = $service->getCharges()->getCharge();
                $totals = $service->getTotalNet();
                $currencyCode = $totals->getCurrency();

                $serviceCode = $service->getType();
                $cost = $totals->getAmount();
                $label = $charges[0]->getChargeType();

                $rate = new Rate($serviceCode, $label, $currencyCode, $cost);
                $rates[]= $rate;
            }
        }

        return new RateResponse($rates);
    }
}
