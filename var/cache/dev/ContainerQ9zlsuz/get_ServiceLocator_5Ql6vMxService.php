<?php

namespace ContainerQ9zlsuz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5Ql6vMxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5Ql6vMx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5Ql6vMx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'platRepo' => ['privates', 'App\\Repository\\PlatRepository', 'getPlatRepositoryService', true],
        ], [
            'platRepo' => 'App\\Repository\\PlatRepository',
        ]);
    }
}
