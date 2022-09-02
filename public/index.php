<?php declare(strict_types=1);

use Laminas\Session\SessionManager;

error_reporting(-1);
ini_set('display_errors', 'On');

require_once './../vendor/autoload.php';

$container = new League\Container\Container;
(require_once './../config/container.php')($container);

$config = (require_once './../config/config.php')();
$container->add('config', $config);

$strategy = (new League\Route\Strategy\ApplicationStrategy())->setContainer($container);

/** @var SessionManager $sessionManager */
$sessionManager = $container->get(SessionManager::class);
$sessionManager->start();

$router = (new League\Route\Router())->setStrategy($strategy);

(require_once './../config/routes.php')($router);

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals();

$response = $router->dispatch($request);

(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
