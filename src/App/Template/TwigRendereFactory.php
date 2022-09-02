<?php declare(strict_types=1);

namespace App\Template;

use Psr\Container\ContainerInterface;
use Twig\Loader\FilesystemLoader;

class TwigRendereFactory
{
    public function __invoke(ContainerInterface $container): TwigRenderer
    {
        $config = $container->get('config')['twig'];
        $loader = new FilesystemLoader($config['template_path']);

        return new TwigRenderer($loader);
    }
}
