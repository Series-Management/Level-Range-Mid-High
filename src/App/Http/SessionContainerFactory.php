<?php declare(strict_types=1);

namespace App\Http;

use Laminas\Session\SessionManager;
use Psr\Container\ContainerInterface;

class SessionContainerFactory
{
    public function __invoke(ContainerInterface $container): SessionContainer
    {
        return new SessionContainer(
            $container->get('config')['session']['name'],
            $container->get(SessionManager::class)
        );
    }
}
