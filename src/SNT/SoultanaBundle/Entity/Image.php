<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image.
 *
 * @ORM\Table(name="Image")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\ImageRepository")
 */
class Image
{
    /**
     * @var int
     *
     * @ORM\Column(name="idImage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idImage;

    /**
     * @var string
     *
     * @ORM\Column(name="urlImage", type="string", length=50, unique=true)
     */
    private $urlImage;

    /**
     * @ORM\ManyToOne(targetEntity="SNT\SoultanaBundle\Entity\Bien")
     * @ORM\JoinColumn(name="idBien", referencedColumnName="idBien")
     */
    private $idBien;

    /**
     * Get idImage.
     *
     * @return int
     */
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * Set urlImage.
     *
     * @param string $urlImage
     *
     * @return Image
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    /**
     * Get urlImage.
     *
     * @return string
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set idBien
     *
     * @param \SNT\SoultanaBundle\Entity\Bien $idBien
     *
     * @return Image
     */
    public function setIdBien(\SNT\SoultanaBundle\Entity\Bien $idBien = null)
    {
        $this->idBien = $idBien;

        return $this;
    }

    /**
     * Get idBien
     *
     * @return \SNT\SoultanaBundle\Entity\Bien
     */
    public function getIdBien()
    {
        return $this->idBien;
    }
}
