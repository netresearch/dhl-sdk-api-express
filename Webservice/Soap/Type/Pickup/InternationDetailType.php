<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Webservice\Soap\Type\Pickup;

/**
 * InternationDetailType class.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class InternationDetailType
{
    /**
     * @var CommoditiesType $Commodities
     */
    protected $Commodities;

    /**
     * @param CommoditiesType $Commodities
     */
    public function __construct(CommoditiesType $Commodities)
    {
      $this->Commodities = $Commodities;
    }

    /**
     * @return CommoditiesType
     */
    public function getCommodities(): CommoditiesType
    {
      return $this->Commodities;
    }

    /**
     * @param CommoditiesType $Commodities
     * @return self
     */
    public function setCommodities(CommoditiesType $Commodities): self
    {
      $this->Commodities = $Commodities;
      return $this;
    }
}
