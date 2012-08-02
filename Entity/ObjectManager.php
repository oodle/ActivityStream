<?php
namespace Odl\ActivityStreamBundle\Entity;

use Doctrine\Common\Util\Debug;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class ObjectManager
{
    protected $em;
    protected $className;

    public function __construct(EntityManager $em, $className)
    {
        $this->em = $em;
        $this->className = $className;
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
     * Save the object
     *
     * @param Object $object
     */
    public function save(Object $object) {
        foreach ($object->getAttachments() as $attachment) {
            $this->save($attachment);
        }

        if ($author = $object->getAuthor()) {
            $this->save($author);
        }

        $this->em->merge($object);
        $this->em->flush();
    }
}
