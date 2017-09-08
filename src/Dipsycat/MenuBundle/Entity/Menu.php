<?php

namespace Dipsycat\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="Dipsycat\MenuBundle\Repository\MenuRepository")
 */
class Menu {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="MenuItem", mappedBy="menu")
     */
    private $menuId;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Menu
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menuId = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add menuId
     *
     * @param \Dipsycat\MenuBundle\Entity\MenuItem $menuId
     * @return Menu
     */
    public function addMenuId(\Dipsycat\MenuBundle\Entity\MenuItem $menuId)
    {
        $this->menuId[] = $menuId;

        return $this;
    }

    /**
     * Remove menuId
     *
     * @param \Dipsycat\MenuBundle\Entity\MenuItem $menuId
     */
    public function removeMenuId(\Dipsycat\MenuBundle\Entity\MenuItem $menuId)
    {
        $this->menuId->removeElement($menuId);
    }

    /**
     * Get menuId
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }
    
    public function __toString() {
        return $this->title;
    }
}
