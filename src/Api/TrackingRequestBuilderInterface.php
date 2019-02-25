<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api;

use Dhl\Express\Api\Data\TrackingRequestInterface;

/**
 * Tracking Request Builder Interface.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface TrackingRequestBuilderInterface
{
    /**
     * Sets the tracking message.
     *
     * @param int    $time
     * @param string $reference
     *
     * @return TrackingRequestBuilderInterface
     */
    public function setMessage($time, $reference);

    /**
     * Sets the tracking AWB numbers.
     *
     * @param array $awbNumbers
     * @return self
     */
    public function setAwbNumbers(array $awbNumbers);

    /**
     * Adds a tracking AWB number.
     *
     * @param string $awbNumber
     * @return self
     */
    public function addAwbNumber($awbNumber);

    /**
     * Sets the tracking's level of details.
     *
     * @param string $levelOfDetails
     * @return self
     */
    public function setLevelOfDetails($levelOfDetails);

    /**
     * Sets the tracking's pieces enabled code.
     *
     * @param string $piecesEnabled
     * @return self
     */
    public function setPiecesEnabled($piecesEnabled);

    /**
     * Sets if the estimated delivery date should be displayed in the response, if available
     *
     * @param bool $eddRequested
     * @return TrackingRequestBuilderInterface
     */
    public function setEstimatedDeliveryDateRequested($eddRequested);

    /**
     * Builds the tracking request instance.
     *
     * @return TrackingRequestInterface
     */
    public function build();
}
