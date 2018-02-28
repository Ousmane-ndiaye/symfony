<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quartier.
 *
 * @ORM\Table(name="Quartier")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\QuartierRepository")
 */
class Quartier
{
    /**
     * @var int
     *
     * @ORM\Column(name="idQuartier", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idQuartier;

    /**
     * @var string
     *
     * @ORM\Column(name="nomQuartier", type="string", length=50)
     */
    private $nomQuartier;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Ville")
     * @ORM\JoinColumn(name="idVille", referencedColumnName="idVille")
     */
    private $idVille;

    /**
     * Get idQuartier.
     *
     * @return int
     */
    public function getIdQuartier()
    {
        return $this->idQuartier;
    }

    /**
     * Set nomQuartier.
     *
     * @param string $nomQuartier
     *
     * @return Quartier
     */
    public function setNomQuartier($nomQuartier)
    {
        $this->nomQuartier = $nomQuartier;

        return $this;
    }

    /**
     * Get nomQuartier.
     *
     * @return string
     */
    public function getNomQuartier()
    {
        return $this->nomQuartier;
    }
}
