<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation.
 *
 * @ORM\Table(name="Reservation")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeReservation", type="datetime")
     */
    private $dateDeReservation;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idBien", referencedColumnName="idBien")
     */
    private $idBien;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Client")
     * @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     */
    private $idClient;

    /**
     * Get idReservation.
     *
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Set dateDeReservation.
     *
     * @param \DateTime $dateDeReservation
     *
     * @return Reservation
     */
    public function setDateDeReservation($dateDeReservation)
    {
        $this->dateDeReservation = $dateDeReservation;

        return $this;
    }

    /**
     * Get dateDeReservation.
     *
     * @return \DateTime
     */
    public function getDateDeReservation()
    {
        return $this->dateDeReservation;
    }
}
