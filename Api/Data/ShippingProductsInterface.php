<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;


/**
 * API Data Interface.
 *
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface ShippingProductsInterface
{
    /**
     * International Express product service codes
     */
    const CODE_INTERNATIONAL_ENVELOPE_DUTYFREE = 'X';
    const CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_OUTSIDE_EU = 'D';
    const CODE_INTERNATIONAL_09_00_DUTYFREE = 'K';
    const CODE_INTERNATIONAL_10_30_DUTYFREE = 'L';
    const CODE_INTERNATIONAL_12_00_DUTYFREE = 'T';
    const CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_WITHIN_EU = 'U';

    const CODE_INTERNATIONAL_09_00_DUTIABLE = 'E';
    const CODE_INTERNATIONAL_10_30_DUTIABLE = 'M';
    const CODE_INTERNATIONAL_12_00_DUTIABLE = 'Y';
    const CODE_INTERNATIONAL_WORLDWIDE_DUTIABLE = 'P';

    /**
     * Domestic Express product service codes
     */
    const CODE_DOMESTIC_09_00 = 'I';
    const CODE_DOMESTIC_10_00 = 'O';
    const CODE_DOMESTIC_12_00 = '1';
    const CODE_DOMESTIC = 'N';
}
