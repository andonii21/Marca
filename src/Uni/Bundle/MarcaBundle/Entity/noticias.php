<?php

namespace Uni\Bundle\MarcaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * noticias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class noticias
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
     * @ORM\Column(name="titulo", type="string", length=50)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=50)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=50)
     */
    private $autor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pub", type="datetime")
     */
    private $fechaPub;

    
    /**
    * @ORM\ManyToOne(targetEntity="categorias", inversedBy="noticiass", cascade={"remove"})
    * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
    */
    protected $categoria;

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
     * Set titulo
     *
     * @param string $titulo
     * @return noticias
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return noticias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return noticias
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return noticias
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set fechaPub
     *
     * @param \DateTime $fechaPub
     * @return noticias
     */
    public function setFechaPub($fechaPub)
    {
        $this->fechaPub = $fechaPub;

        return $this;
    }

    /**
     * Get fechaPub
     *
     * @return \DateTime 
     */
    public function getFechaPub()
    {
        return $this->fechaPub;
    }

    /**
     * Set categoria
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\categorias $categoria
     * @return noticias
     */
    public function setCategoria(\Uni\Bundle\MarcaBundle\Entity\categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Uni\Bundle\MarcaBundle\Entity\categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
* @ORM\OneToMany(targetEntity="comentarios", mappedBy="noticia", cascade={"remove"})
*/
protected $comentarioss;

public function __construct() {
$this->comentarioss = new ArrayCollection();
$this->anuncioss = new ArrayCollection();
}

    /**
     * Add comentarios
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\comentarios $comentarios
     * @return noticias
     */
    public function addComentario(\Uni\Bundle\MarcaBundle\Entity\comentarios $comentarios)
    {
        $this->comentarios[] = $comentarios;

        return $this;
    }

    /**
     * Remove comentarios
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\comentarios $comentarios
     */
    public function removeComentario(\Uni\Bundle\MarcaBundle\Entity\comentarios $comentarios)
    {
        $this->comentarios->removeElement($comentarios);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
    
    public function __toString() {
     return $this->titulo;
    }

    /**
     * Add comentarioss
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\comentarios $comentarioss
     * @return noticias
     */
    public function addComentarioss(\Uni\Bundle\MarcaBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss[] = $comentarioss;

        return $this;
    }

    /**
     * Remove comentarioss
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\comentarios $comentarioss
     */
    public function removeComentarioss(\Uni\Bundle\MarcaBundle\Entity\comentarios $comentarioss)
    {
        $this->comentarioss->removeElement($comentarioss);
    }

    /**
     * Get comentarioss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComentarioss()
    {
        return $this->comentarioss;
    }
      /**
    * @ORM\ManyToMany(targetEntity="anuncios", mappedBy="noticiass")
    */

    private $anuncioss;
    

    /**
     * Add anuncioss
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\anuncios $anuncioss
     * @return noticias
     */
    public function addAnuncioss(\Uni\Bundle\MarcaBundle\Entity\anuncios $anuncioss)
    {
        $this->anuncioss[] = $anuncioss;

        return $this;
    }

    /**
     * Remove anuncioss
     *
     * @param \Uni\Bundle\MarcaBundle\Entity\anuncios $anuncioss
     */
    public function removeAnuncioss(\Uni\Bundle\MarcaBundle\Entity\anuncios $anuncioss)
    {
        $this->anuncioss->removeElement($anuncioss);
    }

    /**
     * Get anuncioss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnuncioss()
    {
        return $this->anuncioss;
    }
}
