<?php
namespace Odl\ActivityStreamBundle\Builder;

use Odl\ActivityStreamBundle\Model\Object;

interface BuilderInterface
{
    /**
     * Build an Object for Activity
     *
     * @param object Must be object type (is_object)
     * @param activityObject Must be and activity object (optional)
     *
     * @return Odl\ActivityStreamBundle\Model\Object
     *
     * @throws UnsupportedException if object is not supported
     */
	public function build($object, Object $activityObject = null);

	/**
	 * Whether this builder supports the given class
	 *
	 * @param string $class
	 * @return boolean
	 */
	public function supportsClass($class);

	/**
	 * Whether this builder supports the given object
	 * @param stdClass object
	 * @return boolean
	 */
	public function supports($object);

	/**
	 * Get an universal id for a given supported object
	 *
	 * @param stdClass object
	 * @return string
	 */
	public function getUniversalId($object);
}