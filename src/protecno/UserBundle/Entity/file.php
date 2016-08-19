<?php

namespace protecno\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * file
 */
class file
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $metatags;

    /**
     * @var \DateTime
     */
    private $dateUpdate;


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
     * Set file
     *
     * @param string $file
     * @return file
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return file
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set metatags
     *
     * @param string $metatags
     * @return file
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
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return file
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }
}
