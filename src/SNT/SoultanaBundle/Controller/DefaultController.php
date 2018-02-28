<?php

namespace SNT\SoultanaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoultanaBundle:Default:index.html.twig');
    }
}
