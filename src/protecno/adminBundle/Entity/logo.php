<?php

namespace protecno\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * logo
 */
class logo
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
     * @var string
     */
    private $eslogan;


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
     * @return logo
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
     * Set eslogan
     *
     * @param string $eslogan
     * @return logo
     */
    public function setEslogan($eslogan)
    {
        $this->eslogan = $eslogan;

        return $this;
    }

    /**
     * Get eslogan
     *
     * @return string 
     */
    public function getEslogan()
    {
        return $this->eslogan;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->logo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add logo
     *
     * @param \protecno\adminBundle\Entity\slider $logo
     * @return logo
     */
    public function addLogo(\protecno\adminBundle\Entity\slider $logo)
    {
        $this->logo[] = $logo;

        return $this;
    }

    /**
     * Remove logo
     *
     * @param \protecno\adminBundle\Entity\slider $logo
     */
    public function removeLogo(\protecno\adminBundle\Entity\slider $logo)
    {
        $this->logo->removeElement($logo);
    }

    /**
     * Get logo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
