<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire.
 *
 * @ORM\Table(name="Proprietaire")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProprietaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idProprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="numPiece", type="string", length=25, unique=true)
     */
    private $numPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=50)
     */
    private $nomComplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=25, unique=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="codeBanque", type="string", length=25, unique=true)
     */
    private $codeBanque;

    /**
     * Get idProprietaire.
     *
     * @return int
     */
    public function getIdProprietaire()
    {
        return $this->idProprietaire;
    }

    /**
     * Set numPiece.
     *
     * @param string $numPiece
     *
     * @return Proprietaire
     */
    public function setNumPiece($numPiece)
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    /**
     * Get numPiece.
     *
     * @return string
     */
    public function getNumPiece()
    {
        return $this->numPiece;
    }

    /**
     * Set nomComplet.
     *
     * @param string $nomComplet
     *
     * @return Proprietaire
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get nomComplet.
     *
     * @return string
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Proprietaire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel.
     *
     * @param int $tel
     *
     * @return Proprietaire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel.
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codeBanque.
     *
     * @param string $codeBanque
     *
     * @return Proprietaire
     */
    public function setCodeBanque($codeBanque)
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    /**
     * Get codeBanque.
     *
     * @return string
     */
    public function getCodeBanque()
    {
        return $this->codeBanque;
    }
}
