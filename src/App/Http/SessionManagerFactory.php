<?php declare(strict_types=1);

namespace App\Http;

use Laminas\Session\Config\StandardConfig;
use Laminas\Session\SessionManager;
use Laminas\Session\Storage\SessionStorage;
use Psr\Container\ContainerInterface;

class SessionManagerFactory
{
    public function __invoke(ContainerInterface $container): SessionManager
    {
        $config = new StandardConfig();
        $config->setOptions($container->get('config')['session']);

        return new SessionManager($config, new SessionStorage());
    }
}
