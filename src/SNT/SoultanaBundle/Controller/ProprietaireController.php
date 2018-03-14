<?php

namespace SNT\SoultanaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProprietaireController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('SoultanaBundle:Proprietaire:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/soumettre/bien")
     */
    public function soumettreBienAction()
    {
        return $this->render('SoultanaBundle:Proprietaire:soumettre.bien.html.twig', array(
            // ...
        ));
    }

}
