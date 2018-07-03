<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request;

/**
 * Special Service Interface.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface SpecialServiceInterface
{
    /**
     * @return string
     */
    public function getServiceType(): string;

    /**
     * @return float
     */
    public function getValue(): float;

    /**
     * @return string
     */
    public function getCurrencyCode(): string;
}
