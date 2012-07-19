<?php
namespace Odl\ActivityStreamBundle\Provider;

Odl\ActivityStreamBundle\Model\Activity;
Odl\ActivityStreamBundle\Model\Object;

interface ProviderInterface
{
	/**
	 * Add an activity
	 */
	public function add(Activity $activity);

	/**
	 * Update an activity
	 */
	public function update(Activity $activity);

	/**
	 * Remove an activity by id
	 */
	public function remove($activityId);

	/**
	 * Update all activity related to the object
	 *
	 * - If actor change name, photo, etc, we should reindex all
	 * 		activity feeds
	 */
	public function updateByObject(Object $object);

	/**
	 * Find activities by $criteria
	 */
	public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);
}
