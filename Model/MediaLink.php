<?php
namespace Odl\ActivityStreamBundle\Model;
/**
 * MediaLink serialization
 *
 * @author David
 */
class MediaLink
{
    /**
     * A hint to the consumer about the length, in seconds, of the media resource
     * identified by the url property. A media link MAY contain a "duration"
     * property when the target resource is a time-based media item such as an
     * audio or video.
     *
     * @var int
     */
    protected $duration;

    /**
     * A hint to the consumer about the height, in pixels, of the media resource
     * identified by the url property. A media link MAY contain a height property
     * when the target resource is a visual media item such as an image, video
     * or embeddable HTML page.
     *
     * @var int
     */
    protected $height;

    /**
     * The IRI of the media resource being linked. A media link MUST have a url
     * property.
     *
     * @var string
     */
    protected $url;

    /**
     * A hint to the consumer about the width, in pixels, of the media resource
     * identified by the url property. A media link MAY contain a width property
     * when the target resource is a visual media item such as an image, video
     * or embeddable HTML page.
     */
    protected $width;

    /**
     * @return the $duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return the $height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return the $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return the $width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param field_type $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
}
