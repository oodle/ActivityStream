<?php
namespace Odl\ActivityStreamBundle\Model;

use Doctrine\ORM\EntityManager;

class ActivityManager
{
    protected $em;
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function save() {

    }
}