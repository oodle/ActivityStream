<?php
namespace Odl\ActivityStreamBundle;

use Odl\ActivityStreamBundle\DependencyInjection\Compiler\ObjectBuilderCompilerPass;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OdlActivityStreamBundle
	extends Bundle
{
	public function build(ContainerBuilder $container)
	{
		parent::build($container);
		$container->addCompilerPass(new ObjectBuilderCompilerPass());
	}
}
