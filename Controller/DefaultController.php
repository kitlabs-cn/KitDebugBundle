<?php

namespace Kit\DebugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitDebugBundle:Default:index.html.twig');
    }
}
