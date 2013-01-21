<?php
namespace Odl\ActivityStreamBundle\Builder;

use Odl\ActivityStreamBundle\Model\Object;

use Odl\ActivityStreamBundle\Exception\UnsupportedException;

/**
 * @author David
 *
 */
class ChainBuilder
    implements BuilderInterface
{
    protected $builders;
    public function __construct() {
        $this->builders = array();
    }

    public function add($builder) {
        $this->builders[] = $builder;
    }


    public function build($object, Object $activityObject = null) {
        foreach ($this->builders as $builder) {
            if ($builder->supports($object)) {
                return $builder->build($object, $activityObject);
            }
        }

        return null;
    }

    public function supportsClass($class) {
        foreach ($this->builders as $builder) {
            if ($builder->supportsClass($class)) {
                return true;
            }
        }

        return false;
    }

    public function supports($object) {
        foreach ($this->builders as $builder) {
            if ($builder->supports($object)) {
                return true;
            }
        }

        return false;
    }

    public function getUniversalId($object) {
        foreach ($this->builders as $builder) {
            if ($builder->supports($object)) {
                return $builder->getUniversalId($object);
            }
        }

        return false;
    }
}
