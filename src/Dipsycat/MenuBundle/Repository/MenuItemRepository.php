<?php

namespace Dipsycat\MenuBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MenuItemRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuItemRepository extends EntityRepository
{
     public function getMainMenuItems() {
        return $this->findBy(['menu' => 1]);
    }
}
