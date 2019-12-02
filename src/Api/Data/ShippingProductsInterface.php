<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data;

/**
 * API Data Interface.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShippingProductsInterface
{
    /**
     * International Express product service codes
     */
    const CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_OUTSIDE_EU = 'D';
    const CODE_INTERNATIONAL_12_00_DUTYFREE = 'T';
    const CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_WITHIN_EU = 'U';

    const CODE_INTERNATIONAL_12_00_DUTIABLE = 'Y';
    const CODE_INTERNATIONAL_WORLDWIDE_DUTIABLE = 'P';
    const CODE_INTERNATIONAL_ECONOMY_SELECT_H = 'H';
    const CODE_INTERNATIONAL_ECONOMY_SELECT_W = 'W';

    /**
     * Domestic Express product service codes
     */
    const CODE_DOMESTIC_12_00 = '1';
    const CODE_DOMESTIC = 'N';

    const PRODUCTS_INTERNATIONAL = [
        self::CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_OUTSIDE_EU,
        self::CODE_INTERNATIONAL_12_00_DUTYFREE,
        self::CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_WITHIN_EU,
        self::CODE_INTERNATIONAL_12_00_DUTIABLE,
        self::CODE_INTERNATIONAL_WORLDWIDE_DUTIABLE,
        self::CODE_INTERNATIONAL_ECONOMY_SELECT_H,
        self::CODE_INTERNATIONAL_ECONOMY_SELECT_W
    ];
    const PRODUCTS_DOMESTIC = [
        self::CODE_DOMESTIC_12_00,
        self::CODE_DOMESTIC
    ];

    /**
     * International Express product names
     */
    const PRODUCT_NAMES_INTERNATIONAL = [
        'EXPRESS WORLDWIDE' => [
            self::CODE_INTERNATIONAL_WORLDWIDE_DUTIABLE,
            self::CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_OUTSIDE_EU,
            self::CODE_INTERNATIONAL_WORLDWIDE_DUTYFREE_WITHIN_EU,
        ],
        'EXPRESS 12:00' => [
            self::CODE_INTERNATIONAL_12_00_DUTIABLE,
            self::CODE_INTERNATIONAL_12_00_DUTYFREE,
        ],
        'ECONOMY SELECT' => [
            self::CODE_INTERNATIONAL_ECONOMY_SELECT_H,
            self::CODE_INTERNATIONAL_ECONOMY_SELECT_W
        ]
    ];

    /**
     * Domestic Express product names
     */
    const PRODUCT_NAMES_DOMESTIC = [
        'EXPRESS DOMESTIC' => [self::CODE_DOMESTIC],
        'EXPRESS DOMESTIC 12:00' => [self::CODE_DOMESTIC_12_00]
    ];
}
