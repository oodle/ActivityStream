<?php
namespace Odl\ActivityStreamBundle\Model;

/**
 * Collection serialization
 *
 * @author David
 */
class Collection {
	/**
	 * Non-negative integer specifying the total number of activities within the
	 * stream. The Stream serialization MAY contain a count property.
	 *
	 * @var int
	 */
	protected $totalItems;

	/**
	 * An array containing a listing of Objects of any object type. If used in
	 * combination with the url property, the items array can be used to
	 * provide a subset of the objects that may be found in the resource
	 * identified by the url.
	 *
	 * @var array of Object
	 */
	protected $items;

	/**
	 * An IRI [RFC3987] referencing a JSON document containing the full listing
	 * of objects in the collection.
	 *
	 * @var string
	 */
	protected $url;

	/**
	 * @return the $totalItems
	 */
	public function getTotalItems()
	{
		return $this->totalItems;
	}

	/**
	 * @return the $items
	 */
	public function getItems()
	{
		return $this->items;
	}

	/**
	 * @return the $url
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param int $totalItems
	 */
	public function setTotalItems(array $totalItems)
	{
		$this->totalItems = $totalItems;
	}

	/**
	 * @param array $items
	 */
	public function setItems($items)
	{
		$this->items = $items;
	}

	/**
	 * @param string $url
	 */
	public function setUrl($url)
	{
		$this->url = $url;
	}
}