<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Response\Tracking\TrackingInfo;

/**
 * PieceEvent Interface.
 *
 * DTO that Tracking information's piece event.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface PieceEventInterface
{
    /**
     * Returns the event's date
     *
     * @return int
     */
    public function getDate();

    /**
     * Returns the event's code
     *
     * @return string
     */
    public function getCode();

    /**
     * Returns the event's description
     *
     * @return string
     */
    public function getDescription();
}
