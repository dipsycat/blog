<?php

namespace Dipsycat\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Dipsycat\PostBundle\Entity\Post as BasePost;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Dipsycat\BlogBundle\Repository\PostRepository")
 */
class Post extends BasePost
{

}
