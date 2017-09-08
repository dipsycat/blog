<?php

namespace Dipsycat\MenuBundle\Menu;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Builder {

    private $container;
    
    public function __construct(Container $container) {
        $this->container = $container;
    }

    public function getMainMenu() {
        $menu = $this->container->get('dipsycat.menu');
        
    }
}
