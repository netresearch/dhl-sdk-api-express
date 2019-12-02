<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentResponse\PackagesResults;

/**
 * The package result.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class PackageResult
{
    /**
     * The tracking number field is the identifier for that specific piece of the shipment,
     * of which there can be many.
     *
     * @var string
     */
    private $TrackingNumber;

    /**
     * The number is used to referentially link the request and result packages.
     *
     * @var int
     */
    private $number;

    /**
     * Returns the tracking number.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * Returns the package reference number.
     *
     * @return int
     */
    public function getNumber()
    {
        return (int) $this->number;
    }
}
