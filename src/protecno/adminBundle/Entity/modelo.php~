<?php

namespace protecno\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * modelo
 */
class modelo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;


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
     * Set nombre
     *
     * @param string $nombre
     * @return modelo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * @var \protecno\adminBundle\Entity\marca
     */
    private $marca;


    /**
     * Set marca
     *
     * @param \protecno\adminBundle\Entity\marca $marca
     * @return modelo
     */
    public function setMarca(\protecno\adminBundle\Entity\marca $marca = null)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return \protecno\adminBundle\Entity\marca 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    function __toString(){
        return $this->nombre;
    }
}
