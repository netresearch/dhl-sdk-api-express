<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * ClientDetailType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ClientDetailType
{
    /**
     * @var string
     */
    protected $sso;

    /**
     * @var string
     */
    protected $plant;

    /**
     * @return string
     */
    public function getSso(): string
    {
      return $this->sso;
    }

    /**
     * @param string $sso
     * @return self
     */
    public function setSso(string $sso): self
    {
      $this->sso = $sso;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlant(): string
    {
      return $this->plant;
    }

    /**
     * @param string $plant
     * @return self
     */
    public function setPlant(string $plant): self
    {
      $this->plant = $plant;
      return $this;
    }
}
