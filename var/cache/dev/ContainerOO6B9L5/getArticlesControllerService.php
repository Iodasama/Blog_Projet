<?php

namespace ContainerOO6B9L5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticlesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Guest\ArticlesController' shared autowired service.
     *
     * @return \App\Controller\Guest\ArticlesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Guest/ArticlesController.php';

        $container->services['App\\Controller\\Guest\\ArticlesController'] = $instance = new \App\Controller\Guest\ArticlesController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Guest\\ArticlesController', $container));

        return $instance;
    }
}
