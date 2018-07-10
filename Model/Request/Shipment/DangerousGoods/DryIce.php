<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Model\Request\Shipment;

use Dhl\Express\Api\Data\Request\Shipment\DangerousGoods\DryIceInterface;

/**
 * Dry Ice.
 *
 * @package  Dhl\Express\Model
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class DryIce implements DryIceInterface
{
    /**
     * Content ID
     */
    private const CONTENT_ID = '901';

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
     * @param string $unCode
     * @param float $weight
     */
    public function __construct(string $unCode, float $weight)
    {
        $this->unCode = $unCode;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getContentId(): string
    {
        return self::CONTENT_ID;
    }


    /**
     * @return string
     */
    public function getUnCode(): string
    {
        return $this->unCode;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
}
