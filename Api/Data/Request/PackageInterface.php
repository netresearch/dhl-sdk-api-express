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
    public function getSequenceNumber(): int;

    /**
     * Returns the weight of the package.
     *
     * @return float
     */
    public function getWeight(): float;

    /**
     * Returns the length of the package.
     *
     * @return float
     */
    public function getLength(): float;

    /**
     * Returns the width of the package.
     *
     * @return float
     */
    public function getWidth(): float;

    /**
     * Returns the height of the package.
     *
     * @return float
     */
    public function getHeight(): float;

    /**
     * Returns the unit of measurement for the dimensions of the package.
     *
     * @return string
     */
    public function getDimensionsUOM(): string;

    /**
     * Returns the unit of measurement for the weight of the package.
     *
     * @return string
     */
    public function getWeightUOM(): string;

    /**
     * Returns the packages customer references.
     *
     * @return string
     */
    public function getCustomerReferences(): string;
}
