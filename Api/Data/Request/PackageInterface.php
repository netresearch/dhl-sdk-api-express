<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request;

/**
 * Package Interface.
 *
 * DTO that carries relevant package data.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface PackageInterface
{
    /**
     * Returns the number of the package.
     *
     * @return int
     */
    public function getSequenceNumber();

    /**
     * Returns the weight of the package.
     *
     * @return float
     */
    public function getWeight();

    /**
     * Returns the length of the package.
     *
     * @return float
     */
    public function getLength();

    /**
     * Returns the width of the package.
     *
     * @return float
     */
    public function getWidth();

    /**
     * Returns the height of the package.
     *
     * @return float
     */
    public function getHeight();

    /**
     * Returns the unit of measurement for the dimensions of the package.
     *
     * @return string
     */
    public function getDimensionsUOM();

    /**
     * Returns the unit of measurement for the weight of the package.
     *
     * @return string
     */
    public function getWeightUOM();

    /**
     * Returns the packages customer references.
     *
     * @return string
     */
    public function getCustomerReferences();
}
