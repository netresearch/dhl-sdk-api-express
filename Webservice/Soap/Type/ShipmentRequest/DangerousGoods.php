<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\DangerousGoods\Content;

/**
 * The dangerous goods section indicates if there is dangerous good content within the shipment. The ContentID node
 * contains the Content ID for the Dangerous Good classification (please contact your DHL Express representative for
 * the list of the codes). If the shipment is Dry Ice UN1845 (Content ID – 901) then the additional node needs to
 * be populated - “DryIceTotalNetWeight.”
 *
 * If is the shipment is “Excepted Quantities” then the additional node needs to be populated – “UNCode”.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class DangerousGoods
{
    /**
     * The content.
     *
     * @var Content
     */
    protected $Content;

    /**
     * Constructor.
     *
     * @param Content $content
     */
    public function __construct($content)
    {
        $this->setContent($content);
    }

    /**
     * Returns the content section.
     *
     * @return Content
     */
    public function getContent(): Content
    {
        return $this->Content;
    }

    /**
     * Sets the content section.
     *
     * @param Content $content The content section
     *
     * @return self
     */
    public function setContent(Content $content): DangerousGoods
    {
        $this->Content = $content;
        return $this;
    }
}
