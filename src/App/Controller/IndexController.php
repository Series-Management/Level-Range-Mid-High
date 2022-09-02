<?php declare(strict_types=1);

namespace App\Controller;

use App\Template\TwigRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexController
{
    public function __construct(
        private readonly TwigRenderer $renderer,
    ) {
    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return $this->renderer->getRender('index.html.twig');
    }
}
