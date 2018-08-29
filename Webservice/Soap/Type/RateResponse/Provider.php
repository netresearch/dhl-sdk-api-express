<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\RateResponse;

use Dhl\Express\Webservice\Soap\Type\Common\Notification;
use Dhl\Express\Webservice\Soap\Type\RateResponse\Provider\Service;

/**
 * The provider section.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class Provider
{
    /**
     * Provider Code, always contains DHL.
     *
     * @var string
     */
    private $code;

    /**
     * Notification section.
     *
     * @var Notification|Notification[]
     */
    private $Notification;

    /**
     * List of services.
     *
     * @var null|array|Service[]
     */
    private $Service;

    /**
     * Returns the provider code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Returns the notification section.
     *
     * @return Notification|Notification[]
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * Returns the list of services.
     *
     * @return null|array|Service[]
     */
    public function getService()
    {
        return $this->Service;
    }
}
