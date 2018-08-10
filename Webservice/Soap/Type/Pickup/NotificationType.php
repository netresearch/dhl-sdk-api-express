<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * NotificationType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class NotificationType
{
    /**
     * @var string
     */
    protected $Message;

    /**
     * @var int
     */
    protected $code;

    /**
     * @param string $Message
     * @param int $code
     */
    public function __construct(string $Message, int $code)
    {
      $this->Message = $Message;
      $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return self
     */
    public function setMessage(string $Message): self
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return self
     */
    public function setCode(int $code): self
    {
      $this->code = $code;
      return $this;
    }
}
