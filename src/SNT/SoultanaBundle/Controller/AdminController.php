<?php

namespace SNT\SoultanaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('SoultanaBundle:Admin:index.html.twig', array(
            // ...
        ));
    }

}
