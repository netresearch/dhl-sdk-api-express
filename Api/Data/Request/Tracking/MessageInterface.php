<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Api\Data\Request\Tracking;

/**
 * Tracking Message interface.
 *
 * DTO that Tracking information's message.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
interface MessageInterface
{
    /**
     * Returns the messages time.
     *
     * @return int
     */
    public function getTime();

    /**
     * Returns the messages reference.
     *
     * @return string
     */
    public function getReference();
}
