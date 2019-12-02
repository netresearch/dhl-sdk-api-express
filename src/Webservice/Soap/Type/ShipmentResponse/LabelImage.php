<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentResponse;

/**
 * The Label Image section of the response provides the label format in the LabelImageFormat field (i.e. PDF),
 * as well as the base64 encoded label image in the GraphicImage field. The HTML Image is not used.
 *
 * @api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @link     https://www.netresearch.de/
 */
class LabelImage
{
    /**
     * The label image format. Mapped from Request Document. Currently always “PDF”.
     *
     * @var null|string
     */
    private $LabelImageFormat;

    /**
     * The graphic image. This field contains the actual label as Base64 Binary. There will be one document
     * containing all the labels for each package/piece on separate pages.
     *
     * @var string
     */
    private $GraphicImage;

    /**
     * The HTML image. Currently not used.
     *
     * @var string
     */
    private $HTMLImage;

    /**
     * Returns the label image format.
     *
     * @return null|string
     */
    public function getLabelImageFormat()
    {
        return $this->LabelImageFormat;
    }

    /**
     * Returns the graphic image binary.
     *
     * @return string
     */
    public function getGraphicImage()
    {
        return $this->GraphicImage;
    }

    /**
     * Returns the HTML image.
     *
     * @return null|string
     */
    public function getHTMLImage()
    {
        return $this->HTMLImage;
    }
}
