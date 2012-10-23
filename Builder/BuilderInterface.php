<?php
namespace Odl\ActivityStreamBundle\Builder;

interface BuilderInterface
{
    /**
     * Build an Object for Activity
     *
     * @param object Must be object type (is_object)
     *
     * @return Odl\ActivityStreamBundle\Model\Object
     *
     * @throws UnsupportedException if object is not supported
     */
	public function build($object);

	/**
	 * Whether this builder supports the given user class
	 *
	 * @param string $class
	 * @return Boolean
	 */
	public function supportsClass($class);

	/**
	 *
	 */
	public function supports($object);
}