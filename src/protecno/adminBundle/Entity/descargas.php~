<?php

namespace protecno\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * descargas
 */
class descargas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

/**
     * @var \protecno\adminBundle\Entity\etiquetasDescarga
     */
    private $etiqueta;

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
     * @return descargas
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
     * Set etiqueta
     *
     * @param \protecno\adminBundle\Entity\etiquetasDescarga $etiqueta
     * @return descargas
     */
    public function setEtiqueta(\protecno\adminBundle\Entity\etiquetasDescarga $etiqueta = null)
    {
        $this->etiqueta = $etiqueta;

        return $this;
    }

    /**
     * Get etiqueta
     *
     * @return \protecno\adminBundle\Entity\etiquetasDescarga 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $imagenes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imagenes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add imagenes
     *
     * @param \protecno\adminBundle\Entity\slider $imagenes
     * @return descargas
     */
    public function addImagene(\protecno\adminBundle\Entity\slider $imagenes)
    {
        $this->imagenes[] = $imagenes;

        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \protecno\adminBundle\Entity\slider $imagenes
     */
    public function removeImagene(\protecno\adminBundle\Entity\slider $imagenes)
    {
        $this->imagenes->removeElement($imagenes);
    }

    /**
     * Get imagenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }
}
