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
    public function getSso()
    {
        return $this->sso;
    }

    /**
     * @param string $sso
     * @return self
     */
    public function setSso($sso)
    {
        $this->sso = $sso;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlant()
    {
        return $this->plant;
    }

    /**
     * @param string $plant
     * @return self
     */
    public function setPlant($plant)
    {
        $this->plant = $plant;
        return $this;
    }
}
