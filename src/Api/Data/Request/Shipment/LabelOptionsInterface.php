<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Shipment;

/**
 * LabelOptions Interface.
 *
 * @api
 * @author   Daniel Fairbrother <dfairbrother@datto.com>
 * @link     https://www.datto.com
 */
interface LabelOptionsInterface
{
    /**
     * Returns the request waybill document option.
     *
     * @return string
     */
    public function getRequestWaybillDocument();
}
