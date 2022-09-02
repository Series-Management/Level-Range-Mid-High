<?php declare(strict_types=1);

return function (League\Route\Router $router): void {
    $router->get(
        '/',
        App\Controller\IndexController::class
    );
};
