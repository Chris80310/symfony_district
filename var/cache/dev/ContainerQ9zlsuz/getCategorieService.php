<?php

namespace ContainerQ9zlsuz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Categorie' shared autowired service.
     *
     * @return \App\Entity\Categorie
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Categorie.php';

        return $container->privates['App\\Entity\\Categorie'] = new \App\Entity\Categorie();
    }
}
