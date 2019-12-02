<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment\DangerousGoods;

use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;

/**
 * Dry Ice.
 *
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class DryIce implements DryIceInterface
{
    /**
     * Content ID
     */
    const CONTENT_ID = '901';

    /**
     * The UN Code.
     *
     * @var string
     */
    private $unCode;

    /**
     * The name.
     *
     * @var float
     */
    private $weight;

    /**
     * DryIce constructor.
     *
     * @param string $unCode
     * @param float  $weight
     */
    public function __construct($unCode, $weight)
    {
        $this->unCode = $unCode;
        $this->weight = $weight;
    }

    public function getContentId()
    {
        return self::CONTENT_ID;
    }

    public function getUNCode()
    {
        return (string) $this->unCode;
    }

    public function getWeight()
    {
        return (float) $this->weight;
    }
}
