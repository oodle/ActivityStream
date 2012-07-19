<?php
namespace Odl\ActivityStreamBundle\Builder\Object;

use Odl\ActivityStreamBundle\Builder\BuilderInterface;
use Odl\ActivityStreamBundle\Exception\UnsupportedException;

/**
 * @author David
 *
 */
class ChainBuilder
	implements BuilderInterface
{
	protected $builders;
	public function __construct(array $builders) {
		$this->builders = $builders;
	}

	public function build($object) {
		if (!$object) {
			return null;
		}

		$class = get_class($object);
		foreach ($builders as $builder) {
			if ($builder->supportsClass($class)) {
				return $buider->build($object);
			}
		}

		throw new UnsupportedException("Unsupported class {$class}");
	}

	/**
	 * Whether this builder supports the given user class
	 *
	 * @param string $class
	 * @return Boolean
	 */
	public function supportsClass($class) {

	}
}