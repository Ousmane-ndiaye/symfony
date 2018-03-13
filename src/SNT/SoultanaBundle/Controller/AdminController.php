<?php

namespace SNT\SoultanaBundle\Controller;

use SNT\SoultanaBundle\Entity\Ville;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $em = $this->getDoctrine()->getManager();
        if ($action == 'ville') {
            $villes = $em->getRepository('SoultanaBundle:Ville')->findAll();
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
                'villes' => $villes
            ));
        } elseif ($action == 'quartier') {
            $quartiers = $em->getRepository('SoultanaBundle:Quartier')->findAll();
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
                'quartiers' => $quartiers
            ));
        } elseif ($action == 'type_de_bien') {
            $type_de_biens = $em->getRepository('SoultanaBundle:TypeBien')->findAll();
            return $this->render('SoultanaBundle:Admin:bien.html.twig', array(
                'action' => $action,
                'type_de_biens' => $type_de_biens
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

    /**
     * @Route("/requete_ajax")
     */
    public function requete_ajaxAction(Request $request)
    {
        extract($_GET);
        $em = $this->getDoctrine()->getManager();
        if (isset($action)) {
            switch ($action) {
                case 'add_ville':
                    $verifVille = $em->getRepository('SoultanaBundle:Ville')->findBy(array('nomVille'=>$nomVille));
                    if($verifVille == null)
                    {
                        $ville = new Ville();
                        $ville->setNomVille($nomVille);
                        $em->persist($ville);
                        $em->flush();
                        return new Response("success");
                    }
                    else
                    {
                        return new Response("exist");
                    }
                break;

                case 'edit_ville':
                    $reservation = $em->getRepository('SoultanaBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

                    return new Response(json_encode($reservation));
                break;

                case 'charger_la_page_detail':
                    $reservation = $em->getRepository('SoultanaBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

                    return new Response(json_encode($reservation));
                break;

                case 'valider_la_reservation':

                    //Enregistrement du contrat
                    $contrat = new contrat();
                    $contrat->setDateContrat(new \DateTime('now'));
                    $contrat->setCaution($em->getRepository('SoultanaBundle:Bien')->find($idBien)->getPrixLoc());
                    $contrat->setDuree('1 an');
                    $contrat->setClient($em->getRepository('SoultanaBundle:client')->find($idClient));
                    $contrat->setBien($em->getRepository('SoultanaBundle:Bien')->find($idBien));
                    $em->persist($contrat);
                    $em->flush();
                    $idContrat = $contrat->getId();

                    //Enregistrement du paiement
                    $paiement = new paiement();
                    $paiement->setDatePaiement(new \DateTime('now'));
                    $paiement->setMontant($montant);
                    $paiement->setPeriode('3 mois');
                    $paiement->setIdContrat($em->getRepository('SoultanaBundle:contrat')->find($idContrat));
                    $em->persist($paiement);
                    $em->flush();

                    //Changement de la disponibilité du bien
                    $bien = $em->getRepository('SoultanaBundle:Bien')->find($idBien);
                    $bien->setDisponibilite(0);
                    $em->persist($bien);
                    $em->flush();

                    //Validation de cette reservation
                    $reservation = $em->getRepository('SoultanaBundle:reservation')->find($idReservation);
                    $reservation->setEtat(0);
                    $em->persist($reservation);
                    $em->flush();

                    return new Response('Sucess');
                break;

                default:
                    // code...
                break;
            }
        }
        return new Response("C'est pas fait !");
    }
}
