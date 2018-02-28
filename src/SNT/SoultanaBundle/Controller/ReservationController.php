<?php

namespace SNT\SoultanaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReservationController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('SoultanaBundle:Reservation:index.html.twig', array(
            // ...
        ));
    }

}
