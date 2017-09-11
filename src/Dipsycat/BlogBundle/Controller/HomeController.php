<?php

namespace Dipsycat\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        $posts = $this->get('dipsycat_post.post_service')->getPosts();
        
        return $this->render('DipsycatBlogBundle:Home:index.html.twig', ['posts' => $posts]);
    }

}
