<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Request\Rate;

/**
 * Package Interface.
 *
 * DTO that carries relevant package data for booking a shipment.
 *
 * @api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
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
     * Returns the unit of measurement for the weight of the package.
     *
     * @return string
     */
    public function getWeightUOM();

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
}
