<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\TrackingRequestBuilderInterface;
use Dhl\Express\Model\Request\Tracking\Message;
use Dhl\Express\Model\TrackingRequest;

/**
 * Tracking Request Builder.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class TrackingRequestBuilder implements TrackingRequestBuilderInterface
{
    /**
     * The collected data used to build the tracking request.
     *
     * @var mixed[]
     */
    private $data = [];

    public function setMessage($time, $reference)
    {
        $this->data['message'] = [
            'time' => $time,
            'reference' => $reference,
        ];

        return $this;
    }

    public function setAwbNumbers(array $awbNumbers)
    {
        $this->data['awb_numbers'] = $awbNumbers;

        return $this;
    }

    public function addAwbNumber($awbNumber)
    {
        $this->data['awb_numbers'][] = $awbNumber;

        return $this;
    }

    public function setLevelOfDetails($levelOfDetails)
    {
        $this->data['level_of_details'] = $levelOfDetails;

        return $this;
    }

    public function setPiecesEnabled($piecesEnabled)
    {
        $this->data['pieces_enabled'] = $piecesEnabled;

        return $this;
    }

    public function setEstimatedDeliveryDateRequested($eddRequested)
    {
        $this->data['estimated_delivery_date'] = $eddRequested;

        return $this;
    }

    public function build()
    {
        $eddEnabled = isset($this->data['estimated_delivery_date'])
            ? $this->data['estimated_delivery_date']
            : false;

        $request = new TrackingRequest(
            new Message(
                $this->data['message']['time'],
                $this->data['message']['reference']
            ),
            $this->data['awb_numbers'],
            $this->data['level_of_details'],
            $this->data['pieces_enabled'],
            $eddEnabled
        );

        $this->data = [];

        return $request;
    }
}
