<?php

namespace Dipsycat\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('DipsycatBlogBundle:Home:index.html.twig');
    }
}
