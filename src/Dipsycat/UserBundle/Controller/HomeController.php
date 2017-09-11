<?php

namespace Dipsycat\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('DipsycatUserBundle:Home:index.html.twig');
    }
}
