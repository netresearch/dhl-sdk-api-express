<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * Fault class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Fault
{
    /**
     * @var PieceFaultCollection
     */
    protected $PieceFault;

    /**
     * @param PieceFaultCollection $PieceFault
     */
    public function __construct(PieceFaultCollection $PieceFault)
    {
        $this->PieceFault = $PieceFault;
    }

    /**
     * @return PieceFaultCollection
     */
    public function getPieceFault()
    {
        return $this->PieceFault;
    }

    /**
     * @param PieceFaultCollection $PieceFault
     * @return self
     */
    public function setPieceFault(PieceFaultCollection $PieceFault)
    {
        $this->PieceFault = $PieceFault;

        return $this;
    }
}
