<?php
namespace Odl\ActivityStreamBundle\Entity;

use Odl\ActivityStreamBundle\Model\Activity as BaseActivity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Activity
    extends BaseActivity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $dbId;

    /**
     * @ORM\ManyToOne(targetEntity="Object", cascade={"merge"});
     */
    protected $actor;

    /**
     * @ORM\ManyToOne(targetEntity="Object", cascade={"merge"});
     */
    protected $generator;

    /**
     * @ORM\ManyToOne(targetEntity="Object", cascade={"merge"});
     */
    protected $object;

    /**
     * @ORM\ManyToOne(targetEntity="Object", cascade={"merge"});
     */
    protected $provider;

    /**
     * @ORM\ManyToOne(targetEntity="Object", cascade={"merge"});
     */
    protected $target;

    /**
     * @return the $dbId
     */
    public function getDbId()
    {
        return $this->dbId;
    }

    /**
     * @param field_type $dbId
     */
    public function setDbId($dbId)
    {
        $this->dbId = $dbId;
    }
}
