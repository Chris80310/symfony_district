<?php

namespace ContainerQ9zlsuz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T7nLwyXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t7nLwyX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t7nLwyX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.t7nLwyX.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.t7nLwyX": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. You should maybe alias this interface to the existing "App\\Entity\\Utilisateur" service.'],
        ], [
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
