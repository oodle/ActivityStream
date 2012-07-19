<?php
namespace Odl\ActivityStreamBundle\Model;

/**
 * Object serialization
 *
 * @author David
 */
class Object {
	/**
	 * Provides a permanent, universally unique identifier for the object in the
	 * form of an absolute IRI [RFC3987]. An object SHOULD contain a single id
	 * property. If an object does not contain an id property, consumers MAY use
	 * the value of the url property as a less-reliable, non-unique identifier.
	 *
	 * @var String
	 */
	protected $id;

	/**
	 * A collection of one or more additional, associated objects, similar to
	 * the concept of attached files in an email message. An object MAY have an
	 * attachments property whose value is a JSON Array of Objects.
	 *
	 * @var array
	 */
	protected $attachments;

	/**
	 *Describes the entity that created or authored the object. An object MAY
	 *contain a single author property whose value is an Object of any type.
	 *Note that the author field identifies the entity that created the object
	 *and does not necessarily identify the entity that published the object.
	 *For instance, it may be the case that an object created by one person is
	 *posted and published to a system by an entirely different entity.
	 *
	 * @var Object
	 */
	protected $author;

	/**
	 * Natural-language description of the object encoded as a single JSON String
	 * containing HTML markup. Visual elements such as thumbnail images MAY be
	 * included. An object MAY contain a content property.
	 *
	 * @var String
	 */
	protected $content;

	/**
	 * A natural-language, human-readable and plain-text name for the object.
	 * HTML markup MUST NOT be included. An object MAY contain a displayName
	 * property. If the object does not specify an objectType property, the
	 * object SHOULD specify a displayName.
	 *
	 * @var String
	 */
	protected $displayName;

	/**
	 * Description of a resource providing a visual representation of the object,
	 * intended for human consumption. An object MAY contain an image property
	 * whose value is a Media Link.
	 *
	 * @var MediaLink
	 */
	protected $image;

	/**
	 * Identifies the type of object. An object MAY contain an objectType property
	 * whose value is a JSON String that is non-empty and matches either the
	 * "isegment-nz-nc" or the "IRI" production in [RFC3987]. Note that the use
	 * of a relative reference other than a simple name is not allowed. If no
	 * objectType property is contained, the object has no specific type.
	 *
	 * @var string
	 */
	protected $objectType;

	/**
	 * The date and time at which the object was published. An object MAY
	 * contain a published property.
	 *
	 * @var DateTime
	 */
	protected $published;

	/**
	 * Natural-language summarization of the object encoded as a single JSON String
	 * containing HTML markup. Visual elements such as thumbnail images MAY be
	 * included. An activity MAY contain a summary property.
	 *
	 * @var string
	 */
	protected $summary;

	/**
	 * The date and time at which a previously published object has been modified.
	 * An Object MAY contain an updated property.
	 *
	 * @var DateTime
	 */
	protected $updated;

	/**
	 * An IRI [RFC3987] identifying a resource providing an HTML representation
	 * of the object. An object MAY contain a url property
	 *
	 * @var String
	 */
	protected $url;

	/**
	 * A JSON Array of one or more absolute IRI's [RFC3987] identifying objects
	 * that duplicate this object's content. An object SHOULD contain a
	 * downstreamDuplicates property when there are known objects, possibly in
	 * a different system, that duplicate the content in this object. This MAY
	 * be used as a hint for consumers to use when resolving duplicates between
	 * objects received from different sources.
	 *
	 * @var array of string
	 */
	protected $downstreamDuplicates;

	/**
	 * A JSON Array of one or more absolute IRI's [RFC3987] identifying objects
	 * that duplicate this object's content. An object SHOULD contain an
	 * upstreamDuplicates property when a publisher is knowingly duplicating
	 * with a new ID the content from another object. This MAY be used as a
	 * hint for consumers to use when resolving duplicates between objects
	 * received from different sources.
	 *
	 * @var array of string
	 */
	protected $upstreamDuplicates;

	/**
	 * @return the $attachments
	 */
	public function getAttachments()
	{
		return $this->attachments;
	}

	/**
	 * @return the $author
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @return the $content
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
	 * @return the $displayName
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * @return the $id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return the $image
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @return the $objectType
	 */
	public function getObjectType()
	{
		return $this->objectType;
	}

	/**
	 * @return the $published
	 */
	public function getPublished()
	{
		return $this->published;
	}

	/**
	 * @return the $summary
	 */
	public function getSummary()
	{
		return $this->summary;
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
	 * @return the $downstreamDuplicates
	 */
	public function getDownstreamDuplicates()
	{
		return $this->downstreamDuplicates;
	}

	/**
	 * @return the $upstreamDuplicates
	 */
	public function getUpstreamDuplicates()
	{
		return $this->upstreamDuplicates;
	}

	/**
	 * @param array $attachments
	 */
	public function setAttachments(array $attachments)
	{
		$this->attachments = $attachments;
	}

	/**
	 * @param Object $author
	 */
	public function setAuthor(Object $author)
	{
		$this->author = $author;
	}

	/**
	 * @param String $content
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * @param String $displayName
	 */
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
	}

	/**
	 * @param String $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @param MediaLink $image
	 */
	public function setImage(MediaLink $image)
	{
		$this->image = $image;
	}

	/**
	 * @param string $objectType
	 */
	public function setObjectType($objectType)
	{
		$this->objectType = $objectType;
	}

	/**
	 * @param DateTime $published
	 */
	public function setPublished(\DateTime $published)
	{
		$this->published = $published;
	}

	/**
	 * @param string $summary
	 */
	public function setSummary($summary)
	{
		$this->summary = $summary;
	}

	/**
	 * @param DateTime $updated
	 */
	public function setUpdated(\DateTime $updated)
	{
		$this->updated = $updated;
	}

	/**
	 * @param String $url
	 */
	public function setUrl($url)
	{
		$this->url = $url;
	}

	/**
	 * @param array $downstreamDuplicates
	 */
	public function setDownstreamDuplicates(array $downstreamDuplicates)
	{
		$this->downstreamDuplicates = $downstreamDuplicates;
	}

	/**
	 * @param array $upstreamDuplicates
	 */
	public function setUpstreamDuplicates(array $upstreamDuplicates)
	{
		$this->upstreamDuplicates = $upstreamDuplicates;
	}
}