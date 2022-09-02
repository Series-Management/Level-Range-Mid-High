<?php declare(strict_types=1);

return function (): array {
    $config = [];
    foreach (glob(realpath(__DIR__) . '/autoload/*.php') as $file) {
        $config = array_merge($config, require $file);
    }

    return $config;
};
