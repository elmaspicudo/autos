<?php

namespace protecno\adminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * auto
 */
class auto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $anio;

    /**
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $motor;

    /**
     * @var string
     */
    private $km;

    /**
     * @var string
     */
    private $interior;

    /**
     * @var string
     */
    private $exterior;

    /**
     * @var integer
     */
    private $puertas;

    /**
     * @var string
     */
    private $llaves;

    /**
     * @var string
     */
    private $tenencia;

    /**
     * @var string
     */
    private $verificacion;

    /**
     * @var string
     */
    private $refacturacion;

    /**
     * @var decimal
     */
    private $precio;

    /**
     * @var string
     */
    private $gastosReparacion;

    /**
     * @var string
     */
    private $observaciones;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categoria;
    /**
     * @var string
     */
    private $precio_anterior;

    /**
     * @var boolean
     */
    private $rebaja;

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
     * Set anio
     *
     * @param string $anio
     * @return auto
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return auto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set motor
     *
     * @param string $motor
     * @return auto
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get motor
     *
     * @return string 
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set km
     *
     * @param string $km
     * @return auto
     */
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return string 
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set interior
     *
     * @param string $interior
     * @return auto
     */
    public function setInterior($interior)
    {
        $this->interior = $interior;

        return $this;
    }

    /**
     * Get interior
     *
     * @return string 
     */
    public function getInterior()
    {
        return $this->interior;
    }

    /**
     * Set exterior
     *
     * @param string $exterior
     * @return auto
     */
    public function setExterior($exterior)
    {
        $this->exterior = $exterior;

        return $this;
    }

    /**
     * Get exterior
     *
     * @return string 
     */
    public function getExterior()
    {
        return $this->exterior;
    }

    /**
     * Set puertas
     *
     * @param integer $puertas
     * @return auto
     */
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;

        return $this;
    }

    /**
     * Get puertas
     *
     * @return integer 
     */
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * Set llaves
     *
     * @param string $llaves
     * @return auto
     */
    public function setLlaves($llaves)
    {
        $this->llaves = $llaves;

        return $this;
    }

    /**
     * Get llaves
     *
     * @return string 
     */
    public function getLlaves()
    {
        return $this->llaves;
    }

    /**
     * Set tenencia
     *
     * @param string $tenencia
     * @return auto
     */
    public function setTenencia($tenencia)
    {
        $this->tenencia = $tenencia;

        return $this;
    }

    /**
     * Get tenencia
     *
     * @return string 
     */
    public function getTenencia()
    {
        return $this->tenencia;
    }

    /**
     * Set verificacion
     *
     * @param string $verificacion
     * @return auto
     */
    public function setVerificacion($verificacion)
    {
        $this->verificacion = $verificacion;

        return $this;
    }

    /**
     * Get verificacion
     *
     * @return string 
     */
    public function getVerificacion()
    {
        return $this->verificacion;
    }

    /**
     * Set refacturacion
     *
     * @param string $refacturacion
     * @return auto
     */
    public function setRefacturacion($refacturacion)
    {
        $this->refacturacion = $refacturacion;

        return $this;
    }

    /**
     * Get refacturacion
     *
     * @return string 
     */
    public function getRefacturacion()
    {
        return $this->refacturacion;
    }

    /**
     * Set precio
     *
     * @param decimal $precio
     * @return auto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set gastosReparacion
     *
     * @param string $gastosReparacion
     * @return auto
     */
    public function setGastosReparacion($gastosReparacion)
    {
        $this->gastosReparacion = $gastosReparacion;

        return $this;
    }

    /**
     * Get gastosReparacion
     *
     * @return string 
     */
    public function getGastosReparacion()
    {
        return $this->gastosReparacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return auto
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
       
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categoria = new \Doctrine\Common\Collections\ArrayCollection();
    }

  

    /**
     * Add categoria
     *
     * @param \protecno\adminBundle\Entity\categorias $categoria
     * @return auto
     */
    public function addCategorium(\protecno\adminBundle\Entity\categorias $categoria)
    {
        $this->categoria[] = $categoria;

        return $this;
    }

    /**
     * Remove categoria
     *
     * @param \protecno\adminBundle\Entity\categorias $categoria
     */
    public function removeCategorium(\protecno\adminBundle\Entity\categorias $categoria)
    {
        $this->categoria->removeElement($categoria);
    }

    /**
     * Get categoria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    

    /**
     * Set precio_anterior
     *
     * @param string $precioAnterior
     * @return auto
     */
    public function setPrecioAnterior($precioAnterior)
    {
        $this->precio_anterior = $precioAnterior;

        return $this;
    }

    /**
     * Get precio_anterior
     *
     * @return string 
     */
    public function getPrecioAnterior()
    {
        return $this->precio_anterior;
    }

    /**
     * Set rebaja
     *
     * @param boolean $rebaja
     * @return auto
     */
    public function setRebaja($rebaja)
    {
        $this->rebaja = $rebaja;

        return $this;
    }

    /**
     * Get rebaja
     *
     * @return boolean 
     */
    public function getRebaja()
    {
        return $this->rebaja;
    }
   

/**
     * @var array
     */
    private $files;


    /**
     * Add files
     *
     * @param \protecno\adminBundle\Entity\slider $files
     * @return auto
     */
    public function addFile($file)
    {
        $this->files[] = $file;

        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param 
     */
    public function removeFile($file)
    {
        $this->files->removeElement($file);
    }

    /**
     * Get imagenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFiles()
    {
        return $this->files;
    }


   
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $imagenes;

   /**
     * Add imagenes
     *
     * @param \protecno\adminBundle\Entity\slider $imagenes
     * @return auto
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



    /**
     * @var \protecno\adminBundle\Entity\modelo
     */
    private $modelo;


    /**
     * Set modelo
     *
     * @param \protecno\adminBundle\Entity\modelo $modelo
     * @return auto
     */
    public function setModelo(\protecno\adminBundle\Entity\modelo $modelo = null)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return \protecno\adminBundle\Entity\modelo 
     */
    public function getModelo()
    {
        return $this->modelo;
    }
    /**
     * @var integer
     */
    private $visitas;

    /**
     * @var \DateTime
     */
    private $fCreacion;


    /**
     * Set visitas
     *
     * @param integer $visitas
     * @return auto
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas
     *
     * @return integer 
     */
    public function getVisitas()
    {
        return $this->visitas;
    }

    /**
     * Set fCreacion
     *
     * @param \DateTime $fCreacion
     * @return auto
     */
    public function setFCreacion($fCreacion)
    {
        $this->fCreacion = $fCreacion;

        return $this;
    }

    /**
     * Get fCreacion
     *
     * @return \DateTime 
     */
    public function getFCreacion()
    {
        return $this->fCreacion;
    }
}
