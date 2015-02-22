<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
         return $this->render('AppBundle:pagina:index.html.twig', array(
            'entity'      => '',
        ));
    }

    /**
     * @Route("/producto", name="producto")
     */
    public function productoAction()
    {
         return $this->render('AppBundle:pagina:producto.html.twig', array(
            'entity'      => '',
        ));
    }

    /**
     * @Route("/interior", name="interior")
     */
    public function interiorAction()
    {
         return $this->render('AppBundle:pagina:interior.html.twig', array(
            'entity'      => '',
        ));
    }

    /**
     * @Route("/tips", name="tips")
     */
    public function tipsAction()
    {
         return $this->render('AppBundle:pagina:tips.html.twig', array(
            'entity'      => '',
        ));
    }

    /**
     * @Route("/descargas", name="descargas")
     */
    public function descargasAction()
    {
         return $this->render('AppBundle:pagina:descargas.html.twig', array(
            'entity'      => '',
        ));
    }
}
