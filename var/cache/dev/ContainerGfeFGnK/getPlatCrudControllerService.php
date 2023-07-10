<?php

namespace ContainerGfeFGnK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\PlatCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PlatCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/PlatCrudController.php';

        $container->services['App\\Controller\\Admin\\PlatCrudController'] = $instance = new \App\Controller\Admin\PlatCrudController();

        $instance->setContainer(($container->privates['.service_locator.5eP_qL9'] ?? $container->load('get_ServiceLocator_5ePQL9Service'))->withContext('App\\Controller\\Admin\\PlatCrudController', $container));

        return $instance;
    }
}