<?php
namespace Odl\ActivityStreamBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ObjectBuilderCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('odl_as.object_builder');

        foreach ($container->findTaggedServiceIds('odl_as.object_builder.builder') as $id => $attributes)
        {
            $builderDefinition = $container->getDefinition($id);
            $class = $builderDefinition->getClass();

            $refClass = new \ReflectionClass($class);
            $interface = 'Odl\ActivityStreamBundle\Builder\BuilderInterface';

            if (!$refClass->implementsInterface($interface)) {
                throw new \InvalidArgumentException(sprintf('Service "%s" must implement interface "%s".', $id, $interface));
            }

            $definition->addMethodCall('add', array(new Reference($id)));
        }
    }

}
