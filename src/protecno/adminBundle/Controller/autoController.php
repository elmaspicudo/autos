<?php

namespace protecno\adminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use protecno\adminBundle\Entity\auto;
use protecno\adminBundle\Entity\slider;
use protecno\adminBundle\Form\autoType;
use Symfony\Component\HttpFoundation\Response;
/**
 * auto controller.
 *
 * @Route("/admin/auto")
 */
class autoController extends Controller
{

    /**
     * Lists all auto entities.
     *
     * @Route("/", name="admin_auto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('adminBundle:auto')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new auto entity.
     *
     * @Route("/", name="admin_auto_create")
     * @Method("POST")
     * @Template("adminBundle:auto:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new auto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);        
        if ($form->isValid()) {            
            $em = $this->getDoctrine()->getManager();
            $i=1;
            $extvalidas = array('JPG','JPEG','PNG','GIF');
            foreach ($entity->getFiles() as $key => $value) {
                if ($value){
                    $image=new slider();
                    $image->setImagen($value);
                    $extension = $image->getImagen()->guessExtension();                
                    if ( in_array(strtoupper($extension), $extvalidas)){                    
                        $image->setTitulo($entity->getModelo().' '.$entity->getAnio());
                        $image->setSubtitulo($entity->getModelo().' '.$entity->getAnio());
                        $image->setOrden($i);
                        $image->setImagen($value);
                        $image->upload();
                        $em->persist($image);
                        $i++;
                        $entity->addImagene($image);
                    }
                }
            }
            $em->persist($entity);
            $em->flush();
            
            return $this->redirect($this->generateUrl('admin_auto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a auto entity.
     *
     * @param auto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(auto $entity)
    {
        $form = $this->createForm(new autoType(), $entity, array(
            'action' => $this->generateUrl('admin_auto_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new auto entity.
     *
     * @Route("/new", name="admin_auto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new auto();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a auto entity.
     *
     * @Route("/{id}", name="admin_auto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:auto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find auto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing auto entity.
     *
     * @Route("/{id}/edit", name="admin_auto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:auto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find auto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a auto entity.
    *
    * @param auto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(auto $entity)
    {
        $form = $this->createForm(new autoType(), $entity, array(
            'action' => $this->generateUrl('admin_auto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing auto entity.
     *
     * @Route("/{id}", name="admin_auto_update")
     * @Method("PUT")
     * @Template("adminBundle:auto:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('adminBundle:auto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find auto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $i=1;
            $extvalidas = array('JPG','JPEG','PNG','GIF');
            foreach ($entity->getFiles() as $key => $value) {
                if ($value){
                    $image=new slider();
                    $image->setImagen($value);
                    $extension = $image->getImagen()->guessExtension();                
                    if ( in_array(strtoupper($extension), $extvalidas)){                    
                        $image->setTitulo($entity->getModelo().' '.$entity->getAnio());
                        $image->setSubtitulo($entity->getModelo().' '.$entity->getAnio());
                        $image->setOrden($i);
                        $image->setImagen($value);
                        $image->upload();
                        $em->persist($image);
                        $i++;
                        $entity->addImagene($image);
                    }
                }
            }
            $em->flush();

            return $this->redirect($this->generateUrl('admin_auto_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a auto entity.
     *
     * @Route("/{id}", name="admin_auto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
           $auto = $em->getRepository('adminBundle:auto')->find($id);

            if (!$auto) {
                throw $this->createNotFoundException('Unable to find auto entity.');
            }
            $imagenes=$auto->getImagenes();
            foreach ($imagenes as $imagen ) {
                echo $imagen->getId();
                $auto->removeImagene($imagen);
               //$em->remove($imagen);
                //$em->flush();
            }           
            $em->remove($auto);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_auto'));
    }

    /**
     * Deletes a slider entity.
     *
     * @Route("/delete/imagen", name="admin_slider_delete_auto")
     * @Method("POST")
     */
    public function deleteautoAction(Request $request)
    {
            $id= $request->get('id',0);
            $idauto= $request->get('auto',0);
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('adminBundle:slider')->find($id);

            if (!$entity) {
                $response = new Response(json_encode(array('sino' => false)));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }
            $auto = $em->getRepository('adminBundle:auto')->find($idauto);
            if (!$auto) {
                $response = new Response(json_encode(array('sino' => false)));
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            }

            $auto->removeImagene($entity);
            $em->remove($entity);
            $em->flush();
        

        $response = new Response(json_encode(array('sino' => true)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
    /**
     * Creates a form to delete a auto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_auto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn btn-danger')))
            ->getForm()
        ;
    }
}
