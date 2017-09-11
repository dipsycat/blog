<?php

namespace Dipsycat\MenuBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class MenuService {
    
    private $container;
    
    public function __construct(Container $container) {
        $this->container = $container;
    }
    
    public function getMainMenu() {
        $doctrine = $this->container->get('doctrine');
        $em = $doctrine->getManager();
        $repository = $em->getRepository('DipsycatMenuBundle:MenuItem');
        return $repository->getMainMenuItems();
    }
}
