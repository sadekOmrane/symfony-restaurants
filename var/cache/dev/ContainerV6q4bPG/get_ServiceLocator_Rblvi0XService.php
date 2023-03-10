<?php

namespace ContainerV6q4bPG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rblvi0XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rblvi0X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rblvi0X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.rblvi0X.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.rblvi0X": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'orderRepository' => 'App\\Repository\\OrderRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
