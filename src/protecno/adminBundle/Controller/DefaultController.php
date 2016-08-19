<?php

namespace protecno\adminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use protecno\adminBundle\Entity\newsletter;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */ 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $logo = $em->getRepository('adminBundle:auto')->findSlider();
        $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
        $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();

        $baners = $em->getRepository('adminBundle:auto')->findSlider();
        $marcas = $em->getRepository('adminBundle:marca')->findAll();
        $categorias=$em->getRepository('adminBundle:categorias')->findAll();
        $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
        $ofertasTop = $em->getRepository('adminBundle:auto')->findOfertas(6);
        $top = $em->getRepository('adminBundle:auto')->findTop(12);
        $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
        return $this->render('adminBundle:pagina:inicio.html.twig', array(
            'baners'      => $baners,
            'marcas'      => $marcas,
            'ofertas'     => $ofertas,
            'ofertasTop'  => $ofertasTop,
            'categorias'  => $categorias,
            'top'         => $top,
            'entity'      => '',
            'paginas'      => $paginas,
            'aviso'      => $aviso,
            'minmax'      => $minmax,
        ));
    }

    /**
     * @Route("/producto/{id}/{name}", name="producto")
     */
    public function productoAction($id,$name)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('adminBundle:auto')->findProducto($id);
        $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
        $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
        if(count($producto )>0){
            $productosRelated = $em->getRepository('adminBundle:auto')->findProductoBymodelo($producto['modelo']['id'],$producto['id'],3);
            return $this->render('adminBundle:pagina:producto.html.twig', array(
                'producto'      => $producto,
                'productosRelated'      => $productosRelated,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
            ));
        }
        return $this->render('adminBundle:pagina:error.html.twig', array(
                'nada'      => 'nada',
            ));
    }
    /**
     * @Route("/categoria/{id}/{name}", name="categoria")
     */
    public function categoriaAction($id,$name)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('adminBundle:categorias')->find($id);
        $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'ASC'),5);
        if ($entity) {
        	$minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
            $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findBy(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $productos = $em->getRepository('adminBundle:auto')->findByCategoria($entity->getID(),9);
            $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
            $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
            return $this->render('adminBundle:pagina:detallecat.html.twig', array(
                'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'productos'  => $productos,
                'categorias'  => $categorias,
                'entity'      => '',
                'nombre'      => $name,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
        }
        return $this->render('adminBundle:pagina:error.html.twig', array(
               
            ));
    }

	/**
     * Deletes a slider entity.
     *
     * @Route("/buscar/rango", name="buscar_rango")
     * @Method("POST")
     */
	public function rangoAction(Request $request)
    {
        $datos= $request->get('rgTodo','0-100');
        $partes=explode('-', $datos);
        $inicio=$partes[0];
        $fin=$partes[1];
    	$em = $this->getDoctrine()->getManager();
       // $entity = $em->getRepository('adminBundle:marca')->find($id);
        $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
        //if ($entity) {
            $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findAll(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $productos = $em->getRepository('adminBundle:auto')->findByRango($inicio,$fin);
            $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
            $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
            return $this->render('adminBundle:pagina:detallecat.html.twig', array(
                'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'productos'  => $productos,
                'categorias'  => $categorias,
                'entity'      => '',
                'nombre'      => '',
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
     


    }
    /**
     * @Route("/marca/{id}/{name}", name="marca")
     */
    public function marcaAction($id,$name)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('adminBundle:marca')->find($id);
        $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
        if ($entity) {
            $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findAll(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $productos = $em->getRepository('adminBundle:auto')->findByMarca($entity->getID(),9);
            $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
            $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
            return $this->render('adminBundle:pagina:detallecat.html.twig', array(
                'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'productos'  => $productos,
                'categorias'  => $categorias,
                'entity'      => '',
                'nombre'      => $name,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
        }
        return $this->render('adminBundle:pagina:error.html.twig', array(
               
            ));
    }

    /**
     * @Route("/interior/{id}/{nombre}", name="interior")
     */
    public function interiorAction($id,$nombre)
    {
        $em = $this->getDoctrine()->getManager();
        $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findBy(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
             $entity=$em->getRepository('adminBundle:pagina')->find($id);
             $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
             $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
         return $this->render('adminBundle:pagina:interior.html.twig', array(
                'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'categorias'  => $categorias,
                'entity'      => $entity,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
    }

    /**
     * @Route("/tips", name="tips")
     */
    public function tipsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findBy(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $tips=$em->getRepository('adminBundle:auto')->findTips(12);
            $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
            $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
            $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
         return $this->render('adminBundle:pagina:tips.html.twig', array(
           'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'categorias'  => $categorias,
                'entity'      => '',
                'tipss'        => $tips,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
    }

    /**
     * @Route("/descargas", name="descargas")
     */
    public function descargasAction()
    {
        $em = $this->getDoctrine()->getManager();
        $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findBy(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $etiquetas = $em->getRepository('adminBundle:etiquetasDescarga')->findAll();
            $descargas = $em->getRepository('adminBundle:auto')->findByEtiqueta(12);
            $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
            $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
            $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
         return $this->render('adminBundle:pagina:descargas.html.twig', array(
           'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'categorias'  => $categorias,
                'entity'      => '',
                'descargas'   => $descargas,
                'etiquetas'   => $etiquetas,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $baners = $em->getRepository('adminBundle:auto')->findSlider();
            $marcas = $em->getRepository('adminBundle:marca')->findBy(array(),array(),5);
            $categorias=$em->getRepository('adminBundle:categorias')->findAll();
            $ofertas = $em->getRepository('adminBundle:auto')->findTop(5);
            $contacto = $em->getRepository('adminBundle:contacto')->find(1);
            $aviso = $em->getRepository('adminBundle:configuracion')->find(1);
            $paginas=$em->getRepository('adminBundle:pagina')->findBy(array(),array('orden'=>'desc'),5);
            $minmax = $em->getRepository('adminBundle:auto')->findMaxMin();
         return $this->render('adminBundle:pagina:contacto.html.twig', array(
            'baners'      => $baners,
                'marcas'      => $marcas,
                'ofertas'     => $ofertas,
                'categorias'  => $categorias,
                'entity'      => $contacto,
                 'paginas'      => $paginas,
                 'aviso'      => $aviso,
                 'minmax'      => $minmax,
            ));
    }

    /**
     * @Route("/imagen", name="imagen")
     */
    public function imagenAction()
    {
        $em = $this->getDoctrine()->getManager();
        $imagenes=$em->getRepository('adminBundle:slider')->findAll();
        $elhtml= $this->renderView('adminBundle:pagina:imagenes.html.twig', array(
                'imagenes'        => $imagenes,
            ));
        $response = new Response('['.$elhtml.']');
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/guardarnews", name="guardarnews")
     */
    public function guardarnewsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();
        $email=$request->request->get('email', '');
        $siono=false;
        if($email!=''){
            $new=new newsletter();
            $new->setMail($email);
            $new->setAccept(1);
            $new->setBaja(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($new);
            $em->flush();
            $siono=true;
        }
        $res=json_encode(array('funciono' =>$siono ));
        $response = new Response($res);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

     /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request = Request::createFromGlobals();
        $body=$this->renderView('adminBundle:pagina:mailcontacto.html.twig',array(
            'name'=>$this->get('request')->request->get('name', ''),
            'email'=>$this->get('request')->request->get('email', ''),
           'subject'=>$this->get('request')->request->get('subject', ''),
            'message'=>$this->get('request')->request->get('message', ''),
            ));
        $correo=$em->getRepository('adminBundle:contacto')->find(1);
         $message = \Swift_Message::newInstance()
        ->setContentType('text/html')
        ->setSubject('Enviaron mensaje de contacto')
        ->setFrom($correo->getCorreo())
        ->setTo($request->request->get('email', ''))
        ->setBody( $body);
        $this->get('mailer')->send($message);
            $siono=true;
       
        $res=json_encode(array('funciono' =>$siono ));
        $response = new Response($res);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Finds and displays a Campaign entity.
     *
     * @Route("/administrar/send", name="campana_send")
     *
     */
        public function sendAction()
        {
        $em = $this->getDoctrine()->getManager();
         $sql = "SELECT  COUNT(id) as cuantos FROM newsletter where baja=0
                  ";
            
        $stmt = $em
            ->getConnection()
            ->prepare($sql);

        $stmt->execute();
        $listaCampaing = $stmt->fetchAll();
                 $elHtmlo=''; 
                 $i=0;
                 $campaign=$listaCampaing[0];
          //$listaCampaing = $em->getRepository('CampaignBundle:Campaign')->findBy(array("nextdate"=>date('Y-m-d h:m:s')));
         //foreach ($listaCampaing as $campaign) {  
         // $request = new Request($_GET, $_POST, array(), $_COOKIE, $_FILES, $_SERVER);
            if($campaign['cuantos']>0){
                $elHtmlo.='<input type="hidden" name="hdntotal" id="hdntotal" value="'.$campaign['cuantos'].'" >';
                $elHtmlo.='<input type="hidden" name="hdnpagina" id="hdnpagina" value="1" >';
              }
           // }*/
        

        return $this->render('adminBundle:pagina:sendnews.html.twig', array(
            'entity' => $elHtmlo,
           
        ));
    }

    /**
     * Finds and displays a Campaign entity.
     *
     * @Route("/administrar/sendajax", name="campana_sendajax")
     * 
     */
    public function sendajaxAction()
        {
            $reg_per_page=50;
             $pagina=$this->get('request')->request->get('pagina');
             $idsiguiente=$pagina*$reg_per_page;
             $paginasig=$pagina+1;
             $em = $this->getDoctrine()->getManager();
             $RegistrosAEmpezar=0;
              if($pagina > 0){
                    $RegistrosAEmpezar=($pagina -1) * $RegistrosAEmpezar;
               }
         $sql = "SELECT  mail FROM newsletter where baja=0
         limit $RegistrosAEmpezar,$reg_per_page
                  ";
            
        $stmt = $em
            ->getConnection()
            ->prepare($sql);

        $stmt->execute();
        $listaCampaing = $stmt->fetchAll();
        $correo=$em->getRepository('adminBundle:contacto')->find(1);
       
        $autos = $em->getRepository('adminBundle:auto')->findTop(5);
        $body3=$this->renderView('adminBundle:pagina:plantilla.html.twig',array(
            'autos'=>$autos, ));
    $contador=0;
    foreach ($listaCampaing as $key) {    
        $message = \Swift_Message::newInstance()
        ->setContentType('text/html')
        ->setSubject($this->get('request')->request->get('subject', ''))
        ->setFrom($correo->getCorreo())
        ->setTo($key['mail'])
        ->setBody($body3)
        ;
        $this->get('mailer')->send($message);
       // echo 'envio a usuario '.$usuario['used_email'].'enviado satisfactoriamente<br>' ;
        $contador++;
    }
  $respuesta= array('pagina' =>$paginasig,'totalenvios'=>$contador,'campanasig'=>$idsiguiente );
   $res=json_encode($respuesta);
        $response = new Response($res);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


}
