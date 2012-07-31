<?php
namespace Odl\ActivityStreamBundle\Model;
/**
 * Activity serialization
 *
 * @author David
 */
class Activity extends Property
{
    /**
     * Provides a permanent, universally unique identifier for the activity in
     * 	the form of an absolute IRI [RFC3987]. An activity SHOULD contain a
     * 	single id property. If an activity does not contain an id property,
     *	consumers MAY use the value of the url property as a less-reliable,
     *	non-unique identifier.
     *
     * @var string
     */
    protected $id;

    /**
     * Describes the entity that performed the activity. An activity MUST
     * 	contain one actor property whose value is a single Object.
     *
     * @var Object
     */
    protected $actor;

    /**
     * Natural-language description of the activity encoded as a single JSON
     * 	String containing HTML markup. Visual elements such as thumbnail images
     * 	MAY be included. An activity MAY contain a content property.
     *
     * @var string
     */
    protected $content;

    /**
     * Describes the application that generated the activity. An activity MAY
     * 	contain a generator property whose value is a single Object.
     *
     * @var Object
     */
    protected $generator;

    /**
     * Description of a resource providing a visual representation of the object,
     *	intended for human consumption. The image SHOULD have an aspect ratio
     *	of one (horizontal) to one (vertical) and SHOULD be suitable for
     *	presentation at a small size. An activity MAY have an icon property.
     *
     * @var MediaLink
     */
    protected $icon;

    /**
     * Describes the primary object of the activity. For instance, in the
     * activity, "John saved a movie to his wishlist", the object of the activity
     * is "movie". An activity SHOULD contain an object property whose value is a
     * single Object. If the object property is not contained, the primary object
     * of the activity MAY be implied by context.
     *
     * @var Object
     */
    protected $object;

    /**
     * The date and time at which the activity was published. An activity MUST
     * 	contain a published property.
     *
     * @var DateTime
     */
    protected $published;

    /**
     * Describes the application that published the activity. Note that this is
     * not necessarily the same entity that generated the activity. An activity
     * MAY contain a provider property whose value is a single Object.
     *
     * @var Object
     */
    protected $provider;

    /**
     * Describes the target of the activity. The precise meaning of the activity's
     * target is dependent on the activities verb, but will often be the object
     * the English preposition "to". For instance, in the activity,
     * "John saved a movie to his wishlist", the target of the activity is "wishlist".
     * The activity target MUST NOT be used to identity an indirect object that
     * is not a target of the activity. An activity MAY contain a target property
     * whose value is a single Object.
     *
     * @var Object
     */
    protected $target;

    /**
     * Natural-language title or headline for the activity encoded as a single
     * JSON String containing HTML markup. An activity MAY contain a title property.
     *
     * @var string
     */
    protected $title;

    /**
     * The date and time at which a previously published activity has been
     * 	modified. An Activity MAY contain an updated property.
     *
     * @var DateTime
     */
    protected $updated;

    /**
     * An IRI [RFC3987] identifying a resource providing an HTML representation
     * 	of the activity. An activity MAY contain a url property.
     *
     * @var string
     */
    protected $url;

    /**
     * Identifies the action that the activity describes. An activity SHOULD
     * contain a verb property whose value is a JSON String that is non-empty
     * and matches either the "isegment-nz-nc" or the "IRI" production in [RFC3339].
     * Note that the use of a relative reference other than a simple name is not allowed.
     * If the verb is not specified, or if the value is null, the verb is assumed to be "post".
     *
     * @var string
     */
    protected $verb;

    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $actor
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @return the $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return the $generator
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * @return the $icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return the $object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return the $published
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return the $provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @return the $target
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @return the $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return the $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return the $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return the $verb
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param Object $actor
     */
    public function setActor(Object $actor)
    {
        $this->actor = $actor;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param Object $generator
     */
    public function setGenerator(Object $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @param MediaLink $icon
     */
    public function setIcon(MediaLink $icon)
    {
        $this->icon = $icon;
    }

    /**
     * @param Object $object
     */
    public function setObject(Object $object)
    {
        $this->object = $object;
    }

    /**
     * @param DateTime $published
     */
    public function setPublished(\DateTime $published)
    {
        $this->published = $published;
    }

    /**
     * @param Object $provider
     */
    public function setProvider(Object $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param Object $target
     */
    public function setTarget(Object $target)
    {
        $this->target = $target;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param DateTime $updated
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param string $verb
     */
    public function setVerb($verb)
    {
        $this->verb = $verb;
    }
}
