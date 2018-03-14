<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien.
 *
 * @ORM\Table(name="Bien")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\BienRepository")
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBien", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idBien;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBien", type="string", length=50)
     */
    private $nomBien;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="prixLocation", type="integer")
     */
    private $prixLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="surface", type="integer")
     */
    private $surface;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreChambre", type="integer")
     */
    private $nbreChambre;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreEtage", type="integer", nullable=true)
     */
    private $nbreEtage;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreSalon", type="integer", nullable=true)
     */
    private $nbreSalon;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreSalleBain", type="integer", nullable=true)
     */
    private $nbreSalleBain;

    /**
     * @var bool
     *
     * @ORM\Column(name="balcon", type="boolean", nullable=true)
     */
    private $balcon;

    /**
     * @var bool
     *
     * @ORM\Column(name="meuble", type="boolean", nullable=true)
     */
    private $meuble;

    /**
     * @var bool
     *
     * @ORM\Column(name="parking", type="boolean", nullable=true)
     */
    private $parking;

    /**
     * @var bool
     *
     * @ORM\Column(name="terasse", type="boolean", nullable=true)
     */
    private $terasse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="negociation", type="string", length=3)
     */
    private $negociation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeSoumission", type="datetime", nullable=false)
     */
    private $dateDeSoumission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArchive", type="datetime", nullable=true)
     */
    private $dateArchive;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Proprietaire")
     * @ORM\JoinColumn(name="idProprietaire", referencedColumnName="idProprietaire", nullable=false)
     */
    private $idProprietaire;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idParent", referencedColumnName="idBien", nullable=true)
     */
    private $idParent;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\TypeBien")
     * @ORM\JoinColumn(name="idTypeBien", referencedColumnName="idTypeBien")
     */
    private $idTypeBien;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Quartier")
     * @ORM\JoinColumn(name="idQuartier", referencedColumnName="idQuartier")
     */
    private $idQuartier;


    /**
     * Get idBien.
     *
     * @return int
     */
    public function getIdBien()
    {
        return $this->idBien;
    }

    /**
     * Set nomBien.
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien.
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set prixLocation.
     *
     * @param int $prixLocation
     *
     * @return Bien
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    /**
     * Get prixLocation.
     *
     * @return int
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }

    /**
     * Set surface.
     *
     * @param int $surface
     *
     * @return Bien
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface.
     *
     * @return int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set nbreChambre.
     *
     * @param int $nbreChambre
     *
     * @return Bien
     */
    public function setNbreChambre($nbreChambre)
    {
        $this->nbreChambre = $nbreChambre;

        return $this;
    }

    /**
     * Get nbreChambre.
     *
     * @return int
     */
    public function getNbreChambre()
    {
        return $this->nbreChambre;
    }

    /**
     * Set nbreEtage.
     *
     * @param int $nbreEtage
     *
     * @return Bien
     */
    public function setNbreEtage($nbreEtage)
    {
        $this->nbreEtage = $nbreEtage;

        return $this;
    }

    /**
     * Get nbreEtage.
     *
     * @return int
     */
    public function getNbreEtage()
    {
        return $this->nbreEtage;
    }

    /**
     * Set nbreSalon.
     *
     * @param int $nbreSalon
     *
     * @return Bien
     */
    public function setNbreSalon($nbreSalon)
    {
        $this->nbreSalon = $nbreSalon;

        return $this;
    }

    /**
     * Get nbreSalon.
     *
     * @return int
     */
    public function getNbreSalon()
    {
        return $this->nbreSalon;
    }

    /**
     * Set nbreSalleBain.
     *
     * @param int $nbreSalleBain
     *
     * @return Bien
     */
    public function setNbreSalleBain($nbreSalleBain)
    {
        $this->nbreSalleBain = $nbreSalleBain;

        return $this;
    }

    /**
     * Get nbreSalleBain.
     *
     * @return int
     */
    public function getNbreSalleBain()
    {
        return $this->nbreSalleBain;
    }

    /**
     * Set balcon.
     *
     * @param bool $balcon
     *
     * @return Bien
     */
    public function setBalcon($balcon)
    {
        $this->balcon = $balcon;

        return $this;
    }

    /**
     * Get balcon.
     *
     * @return bool
     */
    public function getBalcon()
    {
        return $this->balcon;
    }

    /**
     * Set meuble.
     *
     * @param bool $meuble
     *
     * @return Bien
     */
    public function setMeuble($meuble)
    {
        $this->meuble = $meuble;

        return $this;
    }

    /**
     * Get meuble.
     *
     * @return bool
     */
    public function getMeuble()
    {
        return $this->meuble;
    }

    /**
     * Set parking.
     *
     * @param bool $parking
     *
     * @return Bien
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking.
     *
     * @return bool
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set terasse.
     *
     * @param bool $terasse
     *
     * @return Bien
     */
    public function setTerasse($terasse)
    {
        $this->terasse = $terasse;

        return $this;
    }

    /**
     * Get terasse.
     *
     * @return bool
     */
    public function getTerasse()
    {
        return $this->terasse;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set disponibilite.
     *
     * @param bool $disponibilite
     *
     * @return Bien
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite.
     *
     * @return bool
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set idProprietaire.
     *
     * @param \SNT\SoultanaBundle\Entity\Proprietaire $idProprietaire
     *
     * @return Bien
     */
    public function setIdProprietaire(\SNT\SoultanaBundle\Entity\Proprietaire $idProprietaire)
    {
        $this->idProprietaire = $idProprietaire;

        return $this;
    }

    /**
     * Get idProprietaire.
     *
     * @return \SNT\SoultanaBundle\Entity\Proprietaire
     */
    public function getIdProprietaire()
    {
        return $this->idProprietaire;
    }

    /**
     * Set idParent.
     *
     * @param \SNT\SoultanaBundle\Entity\Bien $idParent
     *
     * @return Bien
     */
    public function setIdParent(\SNT\SoultanaBundle\Entity\Bien $idParent = null)
    {
        $this->idParent = $idParent;

        return $this;
    }

    /**
     * Get idParent.
     *
     * @return \SNT\SoultanaBundle\Entity\Bien
     */
    public function getIdParent()
    {
        return $this->idParent;
    }

    /**
     * Set idTypeBien.
     *
     * @param \SNT\SoultanaBundle\Entity\TypeBien $idTypeBien
     *
     * @return Bien
     */
    public function setIdTypeBien(\SNT\SoultanaBundle\Entity\TypeBien $idTypeBien = null)
    {
        $this->idTypeBien = $idTypeBien;

        return $this;
    }

    /**
     * Get idTypeBien.
     *
     * @return \SNT\SoultanaBundle\Entity\TypeBien
     */
    public function getIdTypeBien()
    {
        return $this->idTypeBien;
    }

    /**
     * Set idQuartier.
     *
     * @param \SNT\SoultanaBundle\Entity\Quartier $idQuartier
     *
     * @return Bien
     */
    public function setIdQuartier(\SNT\SoultanaBundle\Entity\Quartier $idQuartier = null)
    {
        $this->idQuartier = $idQuartier;

        return $this;
    }

    /**
     * Get idQuartier.
     *
     * @return \SNT\SoultanaBundle\Entity\Quartier
     */
    public function getIdQuartier()
    {
        return $this->idQuartier;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Bien
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set negociation
     *
     * @param string $negociation
     *
     * @return Bien
     */
    public function setNegociation($negociation)
    {
        $this->negociation = $negociation;

        return $this;
    }

    /**
     * Get negociation
     *
     * @return string
     */
    public function getNegociation()
    {
        return $this->negociation;
    }

    /**
     * Set dateDeSoumission
     *
     * @param \DateTime $dateDeSoumission
     *
     * @return Bien
     */
    public function setDateDeSoumission($dateDeSoumission)
    {
        $this->dateDeSoumission = $dateDeSoumission;

        return $this;
    }

    /**
     * Get dateDeSoumission
     *
     * @return \DateTime
     */
    public function getDateDeSoumission()
    {
        return $this->dateDeSoumission;
    }

    /**
     * Set dateArchive
     *
     * @param \DateTime $dateArchive
     *
     * @return Bien
     */
    public function setDateArchive($dateArchive)
    {
        $this->dateArchive = $dateArchive;

        return $this;
    }

    /**
     * Get dateArchive
     *
     * @return \DateTime
     */
    public function getDateArchive()
    {
        return $this->dateArchive;
    }
}
