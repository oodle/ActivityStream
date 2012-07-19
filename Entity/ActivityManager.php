<?php
namespace Odl\ActivityStreamBundle\Entity;

class ActivityManager
{
	protected $em;
	public function __construct(EntityManager $em, $className) {
		$this->em = $em;
	}

	/**
	 * Find activity by id
	 */
	public function findActivitiesByObjectIds(array $ids) {

	}
}
