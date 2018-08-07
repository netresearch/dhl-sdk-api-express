<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Tracking;

/**
 * ServiceHeader class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class ServiceHeader
{
    /**
     * @var string
     */
    protected $MessageTime;

    /**
     * @var string
     */
    protected $MessageReference;

    /**
     * @param string $MessageTime
     * @param string $MessageReference
     */
    public function __construct(string $MessageTime, string $MessageReference)
    {
      $this->MessageTime = $MessageTime;
      $this->MessageReference = $MessageReference;
    }

    /**
     * @return string
     */
    public function getMessageTime(): string
    {
      if ($this->MessageTime == null) {
        return null;
      } else {
        try {
          return new string($this->MessageTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param string $MessageTime
     * @return self
     */
    public function setMessageTime(string $MessageTime): self
    {
      $this->MessageTime = $MessageTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageReference(): string
    {
      return $this->MessageReference;
    }

    /**
     * @param string $MessageReference
     * @return self
     */
    public function setMessageReference(string $MessageReference): self
    {
      $this->MessageReference = $MessageReference;
      return $this;
    }
}
