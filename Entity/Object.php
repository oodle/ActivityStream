<?php
namespace Odl\ActivityStreamBundle\Entity;

use Odl\ActivityStreamBundle\Model\Object as BaseObject;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Object
    extends BaseObject
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=32)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Object", mappedBy="attachments")
     **/
    protected $attachedTo;

    /**
     * @ORM\ManyToMany(targetEntity="Object", inversedBy="attachedTo")
     * @ORM\JoinTable(name="activity_object_attachments",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id")}
     *      )
     */
    protected $attachments;

    /**
     * @ORM\ManyToOne(targetEntity="Object");
     */
    protected $author;

    public function __construct()
    {
        $this->attachments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attachedTo = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
