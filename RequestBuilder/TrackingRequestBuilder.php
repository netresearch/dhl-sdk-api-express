<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\RequestBuilder;

use Dhl\Express\Api\Data\TrackingRequestInterface;
use Dhl\Express\Api\TrackingRequestBuilderInterface;
use Dhl\Express\Model\Request\Tracking\Message;
use Dhl\Express\Model\TrackingRequest;

/**
 * Tracking Request Builder.
 *
 * @package  Dhl\Express\RequestBuilder
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class TrackingRequestBuilder implements TrackingRequestBuilderInterface
{
    /**
     * The collected data used to build the tracking request.
     *
     * @var array
     */
    private $data = [];

    /**
     * Sets the tracking message.
     *
     * @param int    $time
     * @param string $reference
     *
     * @return TrackingRequestBuilderInterface
     */
    public function setMessage($time, $reference)
    {
        $this->data['message'] = [
            'time' => $time,
            'reference' => $reference,
        ];

        return $this;
    }

    /**
     * Sets the tracking AWB numbers.
     *
     * @param array $awbNumbers
     * @return TrackingRequestBuilderInterface
     */
    public function setAwbNumbers(array $awbNumbers)
    {
        $this->data['awb_numbers'] = $awbNumbers;

        return $this;
    }

    /**
     * Adds a tracking AWB number.
     *
     * @param string $awbNumber
     * @return TrackingRequestBuilderInterface
     */
    public function addAwbNumber($awbNumber)
    {
        $this->data['awb_numbers'][] = $awbNumber;

        return $this;
    }

    /**
     * Sets the tracking's level of details.
     *
     * @param string $levelOfDetails
     * @return TrackingRequestBuilderInterface
     */
    public function setLevelOfDetails($levelOfDetails)
    {
        $this->data['level_of_details'] = $levelOfDetails;

        return $this;
    }

    /**
     * Sets the tracking's pieces enabled code.
     *
     * @param string $piecesEnabled
     * @return TrackingRequestBuilderInterface
     */
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

    /**
     * Builds the tracking request instance.
     *
     * @return TrackingRequestInterface
     */
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
