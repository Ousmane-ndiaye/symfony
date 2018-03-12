<?php

namespace SNT\SoultanaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('SoultanaBundle:Admin:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('SoultanaBundle:Admin:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/bien")
     */
    public function bienAction(Request $request, $action)
    {
        if ($action == 'ville') {
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
            ));
        } elseif ($action == 'quartier') {
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
            ));
        } elseif ($action == 'type_de_bien') {
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
            ));
        } elseif ($action == 'image') {
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
            ));
        } else {
            return $this->render('SoultanaBundle:Admin:index.html.twig', array(
                // ...
            ));
        }
    }
}
