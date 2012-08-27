<?php
namespace Odl\ActivityStreamBundle\Entity;

use Doctrine\ORM\EntityManager;

class ActivityManager
{
    protected $em;
    protected $objectManager;
    protected $className;

    public function __construct(EntityManager $em, ObjectManager $objectManager, $className)
    {
        $this->em = $em;
        $this->className = $className;
        $this->objectManager = $objectManager;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager() {
        return $this->em;
    }

    /**
     * @return EntityRepository
     */
    public function getRepository() {
        return $this->em->getRepository($this->className);
    }

    /**
     * Find activity by object id
     */
    public function findActivitiesByObjectIds(array $ids)
    {

    }

    public function delete($id) {

    }

    /**
     * Delete activity that is associated to a given object
     *
     * @param array $ids
     */
    public function deleteByObjectIds(array $ids) {

    }

    public function save(Activity $activity)  {
        // Tricky part... lets save all objects, maybe mean new object, or existing object
        $this->em->merge($activity);
        $this->em->flush();
    }
}
