<?php

namespace Dipsycat\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DipsycatMenuBundle:Default:index.html.twig');
    }
}
