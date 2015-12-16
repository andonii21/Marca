<?php

namespace Uni\Bundle\MarcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * anuncios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Uni\Bundle\MarcaBundle\Entity\anunciosRepository")
 */
class anuncios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreNot", type="string", length=50)
     */
    private $nombreNot;

    /**
     * @var string
     *
     * @ORM\Column(name="textoNot", type="text")
     */
    private $textoNot;

    /**
     * @var string
     *
     * @ORM\Column(name="companiaNot", type="string", length=50)
     */
    private $companiaNot;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreNot
     *
     * @param string $nombreNot
     * @return anuncios
     */
    public function setNombreNot($nombreNot)
    {
        $this->nombreNot = $nombreNot;

        return $this;
    }

    /**
     * Get nombreNot
     *
     * @return string 
     */
    public function getNombreNot()
    {
        return $this->nombreNot;
    }

    /**
     * Set textoNot
     *
     * @param string $textoNot
     * @return anuncios
     */
    public function setTextoNot($textoNot)
    {
        $this->textoNot = $textoNot;

        return $this;
    }

    /**
     * Get textoNot
     *
     * @return string 
     */
    public function getTextoNot()
    {
        return $this->textoNot;
    }

    /**
     * Set companiaNot
     *
     * @param string $companiaNot
     * @return anuncios
     */
    public function setCompaniaNot($companiaNot)
    {
        $this->companiaNot = $companiaNot;

        return $this;
    }

    /**
     * Get companiaNot
     *
     * @return string 
     */
    public function getCompaniaNot()
    {
        return $this->companiaNot;
    }
    /**
    * @ORM\ManyToMany(targetEntity="noticias", inversedBy="anuncioss")
    */

    private $noticiass;

    public function __construct() {
    $this->noticiass = new ArrayCollection();
    }

    /**
     * Add noticiass
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\noticias $noticiass
     * @return anuncios
     */
    public function addNoticiass(\Uni\Bundle\MarcaBundle\Entity\noticias $noticiass)
    {
        $this->noticiass[] = $noticiass;

        return $this;
    }

    /**
     * Remove noticiass
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\noticias $noticiass
     */
    public function removeNoticiass(\Uni\Bundle\MarcaBundle\Entity\noticias $noticiass)
    {
        $this->noticiass->removeElement($noticiass);
    }

    /**
     * Get noticiass
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticiass()
    {
        return $this->noticiass;
    }
}
