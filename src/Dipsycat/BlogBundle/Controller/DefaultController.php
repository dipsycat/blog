<?php

namespace Dipsycat\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DipsycatBlogBundle:Default:index.html.twig');
    }
}
