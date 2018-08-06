<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ShipperReference class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ShipperReference
{
    /**
     * @var string
     */
    protected $ReferenceID;

    /**
     * @var string $Referenceype
     */
    protected $ReferenceType;

    /**
     * @return string
     */
    public function getReferenceID(): string
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return self
     */
    public function setReferenceID(string $ReferenceID): self
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceType(): string
    {
      return $this->ReferenceType;
    }

    /**
     * @param string $ReferenceType
     * @return self
     */
    public function setReferenceType(string $ReferenceType): self
    {
      $this->ReferenceType = $ReferenceType;
      return $this;
    }
}
