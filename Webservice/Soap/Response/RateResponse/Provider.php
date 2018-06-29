<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Response\RateResponse;

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
     * @var Notification
     */
    private $Notification;

    /**
     * List of services.
     *
     * @var array|Service[]
     */
    private $Service;

    /**
     * Returns the provider code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Returns the notification section.
     *
     * @return Notification
     */
    public function getNotification(): Notification
    {
        return $this->Notification;
    }

    /**
     * Returns the list of services.
     *
     * @return array|Service[]
     */
    public function getService(): array
    {
        return $this->Service;
    }
}
