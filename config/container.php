<?php declare(strict_types=1);

use App\Controller\IndexController;
use App\Database\PDOFactory;
use App\Http\SessionContainer;
use App\Http\SessionContainerFactory;
use App\Http\SessionManagerFactory;
use App\Template\TwigRendereFactory;
use App\Template\TwigRenderer;
use Envms\FluentPDO\Query;
use Laminas\Session\SessionManager;
use League\Container\Container;

return function (Container $container) {
    $container->add(Container::class, $container);

    $container->add(SessionManager::class, function () use ($container) {
        return (new SessionManagerFactory())($container);
    });

    $container->add(SessionContainer::class, function () use ($container) {
        return (new SessionContainerFactory())($container);
    });

    $container->add(PDO::class, function () use ($container) {
        return (new PDOFactory)($container);
    });

    $container->add(TwigRenderer::class, function () use ($container) {
        return (new TwigRendereFactory)($container);
    });

    $container->add(Query::class)
        ->addArgument(PDO::class);

    $container->add(IndexController::class)
        ->addArgument(TwigRenderer::class);
};
