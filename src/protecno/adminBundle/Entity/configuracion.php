<?php

namespace protecno\adminBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;

/**
 * configuracion
 */
class configuracion
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
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $metatags;

    /**
     * @var string
     */
    private $terminos;

    /**
     * @var string
     */
    private $aviso;


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
     * @return configuracion
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return configuracion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set metatags
     *
     * @param string $metatags
     * @return configuracion
     */
    public function setMetatags($metatags)
    {
        $this->metatags = $metatags;

        return $this;
    }

    /**
     * Get metatags
     *
     * @return string 
     */
    public function getMetatags()
    {
        return $this->metatags;
    }

    /**
     * Set terminos
     *
     * @param string $terminos
     * @return configuracion
     */
    public function setTerminos($terminos)
    {
        $this->terminos = $terminos;

        return $this;
    }

    /**
     * Get terminos
     *
     * @return string 
     */
    public function getTerminos()
    {
        return $this->terminos;
    }

    /**
     * Set aviso
     *
     * @param string $aviso
     * @return configuracion
     */
    public function setAviso($aviso)
    {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return string 
     */
    public function getAviso()
    {
        return $this->aviso;
    }
}
