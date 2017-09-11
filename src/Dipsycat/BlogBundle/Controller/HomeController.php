<?php

namespace Dipsycat\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('DipsycatBlogBundle:Post');
        $posts = $repository->findBy([], ['created' => 'DESC']);

        return $this->render('DipsycatBlogBundle:Home:index.html.twig', ['posts' => $posts]);
    }

}
