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
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class DangerousGoods
{
    /**
     * The content.
     *
     * @var Content
     */
    private $Content;

    /**
     * Constructor.
     *
     * @param Content $content
     */
    public function __construct(Content $content)
    {
        $this->setContent($content);
    }

    /**
     * Returns the content section.
     *
     * @return Content
     */
    public function getContent()
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
    public function setContent(Content $content)
    {
        $this->Content = $content;
        return $this;
    }
}
