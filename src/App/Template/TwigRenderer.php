<?php declare(strict_types=1);

namespace App\Template;

use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class TwigRenderer extends Environment
{
    public function getRender($name, array $context = []): ResponseInterface
    {
        $template = Environment::render($name, $context);
        $response = new Response();
        $response->getBody()->write($template);
        return $response;
    }
}
