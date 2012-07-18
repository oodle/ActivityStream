<?php
namespace Odl\ActivityStreamBundle\Entity;

class ActivityManager
{
	protected $em;
	public function __construct(EntityManager $em, $className) {
		$this->em = $em;
	}

	public function findActivitiesByObjectId() {

	}
}
