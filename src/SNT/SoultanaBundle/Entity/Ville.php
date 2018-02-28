<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville.
 *
 * @ORM\Table(name="Ville")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\VilleRepository")
 */
class Ville
{
    /**
     * @var int
     *
     * @ORM\Column(name="idVille", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idVille;

    /**
     * @var string
     *
     * @ORM\Column(name="nomVille", type="string", length=50, unique=true)
     */
    private $nomVille;

    /**
     * Get idVille.
     *
     * @return int
     */
    public function getIdVille()
    {
        return $this->idVille;
    }

    /**
     * Set nomVille.
     *
     * @param string $nomVille
     *
     * @return Ville
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille.
     *
     * @return string
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }
}
