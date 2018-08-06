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
     * @var \DateTime
     */
    protected $MessageTime;

    /**
     * @var string
     */
    protected $MessageReference;

    /**
     * @param \DateTime $MessageTime
     * @param string $MessageReference
     */
    public function __construct(\DateTime $MessageTime, string $MessageReference)
    {
      $this->MessageTime = $MessageTime->format(\DateTime::ATOM);
      $this->MessageReference = $MessageReference;
    }

    /**
     * @return \DateTime
     */
    public function getMessageTime(): \DateTime
    {
      if ($this->MessageTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MessageTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MessageTime
     * @return self
     */
    public function setMessageTime(\DateTime $MessageTime): self
    {
      $this->MessageTime = $MessageTime->format(\DateTime::ATOM);
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
