<?php declare(strict_types=1);

namespace App\Http;

use Laminas\Session\Container;
use Laminas\Session\ManagerInterface as Manager;

class SessionContainer extends Container
{
    public function __construct($name = 'Default', ?Manager $manager = null)
    {
        parent::__construct($name, $manager);
    }
}
